<?php
namespace PMApi\Repository;

use GuzzleHttp\Exception\GuzzleException;
use Symfony\Component\Serializer\SerializerInterface;

class AbstractPMRepository
{
    public function __construct(
        protected string $url,
        protected string $userAgent,
        protected SerializerInterface $serializer,
    )
    {

    }
    /**
     * @throws GuzzleException
     */
    protected function sendGetRequest(string $endpoint): string
    {
        $url = $this->url . $endpoint;

        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url, [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'User-Agent' => $this->userAgent,
            ],
            'verify' => false, // Desactivar la verificación SSL
        ]);
        return $response->getBody()->getContents();
    }

    /**
     * @throws GuzzleException
     */
    protected function sendPostRequest(string $endpoint, array $data): string
    {
        $url = $this->url . $endpoint;
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', $url, [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'User-Agent' => $this->userAgent,
            ],
            'json' => $data,
            'verify' => false, // Desactivar la verificación SSL
        ]);
        return $response->getBody()->getContents();
    }

    /**
     * @throws GuzzleException
     */
    protected function sendPutRequest(string $endpoint, array $data): string
    {
        $url = $this->url . $endpoint;
        $client = new \GuzzleHttp\Client();
        $response = $client->request('PUT', $url, [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'User-Agent' => $this->userAgent,
            ],
            'json' => $data,
            'verify' => false, // Desactivar la verificación SSL
        ]);
        return $response->getBody()->getContents();
    }

    /**
     * @throws GuzzleException
     */
    protected function sendDeleteRequest(string $endpoint): string
    {
        $url = $this->url . $endpoint;
        $client = new \GuzzleHttp\Client();
        $response = $client->request('DELETE', $url, [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'User-Agent' => $this->userAgent,
            ],
            'verify' => false, // Desactivar la verificación SSL
        ]);
        return $response->getBody()->getContents();
    }
}