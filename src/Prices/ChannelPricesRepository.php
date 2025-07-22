<?php

namespace Api\Prices;

use Api\AbstractChannelsRepository;
use Api\DTO\ChannelPricesDTO\ChannelPricesDTO;
use Api\DTO\Response\SendPrices\SendPricesResponseDTO;

class ChannelPricesRepository extends AbstractChannelsRepository
{
    private const ENDPOINT = 'api/v1/send-pricing/{integrationId}';

    public function sendWithStatusCheck(ChannelPricesDTO $channelPricesDTO, int $channelId): SendPricesResponseDTO
    {
        $serializedJson = $this->serializer->serialize($channelPricesDTO, 'json');

        $endpoint = str_replace('{integrationId}', (string) $channelId, self::ENDPOINT);

        $response = $this->sendPostRequest(
            $endpoint,
            $serializedJson
        );

        return $this->serializer->deserialize(
            $response,
            SendPricesResponseDTO::class,
            'json'
        );
    }

    public function sendAsync(ChannelPricesDTO $channelPricesDTO, int $channelId): void
    {
        $serializedJson = $this->serializer->serialize($channelPricesDTO, 'json');

        $endpoint = str_replace('{integrationId}', (string) $channelId, self::ENDPOINT);

        $this->sendAsyncPostRequest(
            $endpoint,
            $serializedJson
        );
    }
}