<?php
namespace Api;
use Symfony\Component\Serializer\SerializerInterface;

class AbstractChannelsRepository
{
    public function __construct(
       private string $url,
       protected SerializerInterface $serializer
    )
    {

    }

    protected function getHostUrl()
    {
        return $this->url;
    }

    protected function sendAsyncPostRequest(string $endpoint, string $body): void
    {
        $url = $this->getHostUrl() . $endpoint;

        //we send an async POST request to the URL, this is a fire and forget request
        $client = new \GuzzleHttp\Client();
        $client->request('POST', $url, [
            'body' => $body,
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ],
            'async' => true,
        ]);
    }

    protected function sendPostRequest(string $endpoint, string $body): string
    {
        $url = $this->getHostUrl() . $endpoint;

        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', $url, [
            'body' => $body,
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ],
        ]);
        $responseBody = $response->getBody()->getContents();

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \Exception('Invalid JSON response: ' . json_last_error_msg());
        }

        return $responseBody;
    }

    protected function sendGetRequest(string $endpoint, string $body = ''): string
    {
        $url = $this->getHostUrl() . $endpoint;

        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url, [
            'body' => $body,
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ],
        ]);
        $responseBody = $response->getBody()->getContents();

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \Exception('Invalid JSON response: ' . json_last_error_msg());
        }

        return $responseBody;
    }
}