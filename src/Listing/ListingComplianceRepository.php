<?php

namespace Api\Listing;

use Api\AbstractChannelsRepository;
use Api\DTO\Response\ComplianceRequirements\ComplianceRequirementsResponseDTO;
use Api\DTO\Response\ComplianceStatus\ComplianceStatusDTOResponse;
use Api\DTO\SendComplianceRequestDTO\SendComplianceRequestDTO;

class ListingComplianceRepository extends AbstractChannelsRepository
{
    private const ENDPOINT_STATUS = 'api/v1/listing/compliance-status/{integrationId}/{listingCode}';
    private const ENDPOINT_GET_REQUIREMENTS = 'api/v1/listing/compliance-requirements/{integrationId}/{listingCode}';
    private const ENDPOINT_SEND_REQUIREMENTS = 'api/v1/listing/send-compliance-requirements/{integrationId}/{listingCode}';

    public function getComplianceStatus(int $integrationId, string $listingCode): ComplianceStatusDTOResponse
    {
        $endpoint = str_replace(
            ['{integrationId}', '{listingCode}'],
            [(string) $integrationId, $listingCode],
            self::ENDPOINT_STATUS
        );

        $response = $this->sendGetRequest($endpoint);

        return $this->serializer->deserialize(
            $response,
            ComplianceStatusDTOResponse::class,
            'json'
        );
    }

    public function getComplianceRequirements(int $integrationId, string $listingCode): ComplianceRequirementsResponseDTO
    {
        $endpoint = str_replace(
            ['{integrationId}', '{listingCode}'],
            [(string) $integrationId, $listingCode],
            self::ENDPOINT_GET_REQUIREMENTS
        );

        $body = $this->sendGetRequest($endpoint);

        return $this->serializer->deserialize(
            $body,
            ComplianceRequirementsResponseDTO::class,
            'json'
        );
    }

    public function sendComplianceRequirements(int $integrationId, string $listingCode, SendComplianceRequestDTO $sendComplianceRequestDTO): ComplianceStatusDTOResponse
    {
        $endpoint = str_replace(
            ['{integrationId}', '{listingCode}'],
            [(string) $integrationId, $listingCode],
            self::ENDPOINT_SEND_REQUIREMENTS
        );

        $serializedJson = $this->serializer->serialize($sendComplianceRequestDTO, 'json');

        $response = $this->sendPostRequest(
            $endpoint,
            $serializedJson
        );

        return $this->serializer->deserialize(
            $response,
            ComplianceStatusDTOResponse::class,
            'json'
        );
    }
}