<?php
namespace Api\Availability;

use Api\AbstractChannelsRepository;
use Api\DTO\ChannelAvailabilityDTO\ChannelAvailabilityDTO;
use Api\DTO\Response\SendAvailability\SendAvailabilityResponseDTO;

class ChannelAvailabilityRepository extends AbstractChannelsRepository
{
    private const ENDPOINT = 'api/v1/send-availability/{integrationId}';

    /**
     * @throws \Exception
     */
    public function sendWithStatusCheck(ChannelAvailabilityDTO $channelAvailabilityDTO, int $integrationId): SendAvailabilityResponseDTO
    {
        $serializedJson = $this->serializer->serialize($channelAvailabilityDTO, 'json');

        $endpoint = str_replace('{integrationId}', (string) $integrationId, self::ENDPOINT);

        $response = $this->sendPostRequest(
            $endpoint,
            $serializedJson
        );

        return $this->serializer->deserialize(
            $response,
            SendAvailabilityResponseDTO::class,
            'json'
        );
    }

    public function sendAsync(ChannelAvailabilityDTO $channelAvailabilityDTO, int $integrationId): void
    {
        $serializedJson = $this->serializer->serialize($channelAvailabilityDTO, 'json');

        $endpoint = str_replace('{integrationId}', (string) $integrationId, self::ENDPOINT);

        $this->sendAsyncPostRequest(
            $endpoint,
            $serializedJson
        );
    }
}