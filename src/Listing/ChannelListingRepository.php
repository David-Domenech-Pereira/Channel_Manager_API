<?php

namespace Api\Listing;

use Api\AbstractChannelsRepository;
use Api\DTO\CreateListingDTO\CreateListingDTO;
use Api\DTO\Response\CreateListing\CreateListingResponseDTO;
use Api\DTO\Response\GetListing\GetListingResponseDTO;
use Api\DTO\Response\GetListings\GetListingsResponseDTO;

class ChannelListingRepository extends AbstractChannelsRepository
{
    private const ENDPOINT = 'api/v1/listing/create/{integrationId}';
    private const LIST_ENDPOINT = 'api/v1/listing/list/{integrationId}';
    private const STATUS_ENDPOINT = 'api/v1/listing/detail/{integrationId}/{listingCode}';
    private const RAW_STATUS_ENDPOINT = 'api/v1/listing/raw/{integrationId}/{listingCode}';

    public function sendWithStatusCheck(CreateListingDTO $createListingDTO, int $integrationId): CreateListingResponseDTO
    {
        $serializedJson = $this->serializer->serialize($createListingDTO, 'json');

        $endpoint = str_replace('{integrationId}', (string) $integrationId, self::ENDPOINT);

        $response = $this->sendPostRequest(
            $endpoint,
            $serializedJson
        );

        return $this->serializer->deserialize(
            $response,
            CreateListingResponseDTO::class,
            'json'
        );
    }

    public function getListings(int $integrationId): GetListingsResponseDTO
    {
        $endpoint = str_replace('{integrationId}', (string) $integrationId, self::LIST_ENDPOINT);

        $response = $this->sendGetRequest($endpoint);

        return $this->serializer->deserialize(
            $response,
            GetListingsResponseDTO::class,
            'json'
        );
    }

    public function getListingStatus(int $integrationId, string $listingCode): GetListingResponseDTO
    {
        $endpoint = str_replace(
            ['{integrationId}', '{listingCode}'],
            [(string) $integrationId, $listingCode],
            self::STATUS_ENDPOINT
        );

        $response = $this->sendGetRequest($endpoint);

        return $this->serializer->deserialize(
            $response,
            GetListingResponseDTO::class,
            'json'
        );
    }

    public function getRawListing(int $integrationId, string $listingCode): string
    {
        $endpoint = str_replace(
            ['{integrationId}', '{listingCode}'],
            [(string) $integrationId, $listingCode],
            self::RAW_STATUS_ENDPOINT
        );

        return $this->sendGetRequest($endpoint);
    }
}