<?php

namespace PMSApi\Repository;

use Api\PMSApi\Request\Listing\GetListingRequestDTO;
use PMSApi\AbstractPMSRepository;
use PMSApi\Request\Listing\GetListingsRequestDTO;
use PMSApi\Response\Listing\GetListingResponseDTO;
use PMSApi\Response\Listing\GetListingsResponseDTO;

class PMSListingRepository extends AbstractPMSRepository
{
    const GET_LISTING_ENDPOINT = '/channel-api/v1/listing/get-listing/{integrationId}';
    const GET_LISTINGS_ENDPOINT = '/channel-api/v1/listing/get-listings/{integrationId}';
    public function findListings(GetListingsRequestDTO $getListingsRequestDTO, int $integrationId): GetListingsResponseDTO
    {
        $endpoint = str_replace('{integrationId}', (string) $integrationId, self::GET_LISTINGS_ENDPOINT);

        $requestBody = $this->serializer->serialize($getListingsRequestDTO, 'json');

        $response = $this->sendPostRequest($endpoint, $requestBody);

        return $this->serializer->deserialize(
            $response,
            GetListingsResponseDTO::class,
            'json'
        );
    }

    public function findListing(GetListingRequestDTO $getListingRequestDTO, int $integrationId): GetListingResponseDTO
    {
        $endpoint = str_replace('{integrationId}', (string) $integrationId, self::GET_LISTING_ENDPOINT);

        $requestBody = $this->serializer->serialize($getListingRequestDTO, 'json');

        $response = $this->sendPostRequest($endpoint, $requestBody);

        return $this->serializer->deserialize(
            $response,
            GetListingResponseDTO::class,
            'json'
        );
    }
}