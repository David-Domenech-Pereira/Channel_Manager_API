<?php

namespace PMApi\Repository\Availability;

use PMApi\Repository\AbstractPMRepository;
use PMApi\Request\Availability\ProviderLiveAvailabilityRequestDTO;
use PMApi\Response\Availability\ProviderLiveAvailabilityResponseDTO;

class PMAvailabilityRepository extends AbstractPMRepository
{
    const ENDPOINT = 'api/v1/provider/availability/live/{integrationId}';

    public function getLiveAvailability(ProviderLiveAvailabilityRequestDTO $providerLiveAvailabilityRequestDTO, int $integrationId): ProviderLiveAvailabilityResponseDTO
    {
        $url = str_replace('{integrationId}', $integrationId, self::ENDPOINT);

        $response = $this->sendPostRequest(
            $url,
            $this->serializer->serialize($providerLiveAvailabilityRequestDTO, 'json')
        );

        return $this->serializer->deserialize($response, ProviderLiveAvailabilityResponseDTO::class, 'json');
    }
}