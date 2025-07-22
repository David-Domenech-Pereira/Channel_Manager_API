<?php

namespace Api\ListingUpdateStatus;

use Api\AbstractChannelsRepository;
use Api\DTO\Response\UpdateStatus\UpdateStatusResponseDTO;
use Api\DTO\UpdateStatusDTO\UpdateStatusDTO;

class ChannelUpdateListingStatusRepository extends AbstractChannelsRepository
{
    private const ENDPOINT = 'api/v1/listing/update-status/{integrationId}';

    public function sendWithStatusCheck(UpdateStatusDTO $updateStatusDTO, int $channelId): UpdateStatusResponseDTO
    {
        $serializedJson = $this->serializer->serialize($updateStatusDTO, 'json');

        $endpoint = str_replace('{integrationId}', (string) $channelId, self::ENDPOINT);

        $response = $this->sendPostRequest(
            $endpoint,
            $serializedJson
        );

        return $this->serializer->deserialize(
            $response,
            UpdateStatusResponseDTO::class,
            'json'
        );
    }

    public function sendAsync(UpdateStatusDTO $updateStatusDTO, int $channelId): void
    {
        $serializedJson = $this->serializer->serialize($updateStatusDTO, 'json');

        $endpoint = str_replace('{integrationId}', (string) $channelId, self::ENDPOINT);

        $this->sendAsyncPostRequest(
            $endpoint,
            $serializedJson
        );
    }
}