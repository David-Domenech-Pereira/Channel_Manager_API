<?php

namespace Api\Listing;

use Api\AbstractChannelsRepository;
use Api\DTO\CreatePullListingDTO\CreatePullListingDTO;

class ChannelPullListingRepository extends AbstractChannelsRepository
{
    private const ENDPOINT = 'api/v1/pull-listing/create/{integrationId}';

    public function sendWithStatusCheck(CreatePullListingDTO $createListingDTO, int $integrationId): string
    {
        $serializedJson = $this->serializer->serialize($createListingDTO, 'json');

        $endpoint = str_replace('{integrationId}', (string) $integrationId, self::ENDPOINT);

        return $this->sendPostRequest(
            $endpoint,
            $serializedJson
        );
    }
}