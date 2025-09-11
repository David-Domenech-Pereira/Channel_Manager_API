<?php

namespace PMApi\Repository\Booking;

use PMApi\Repository\AbstractPMRepository;
use PMApi\Request\Booking\BookingProviderSendRequestDTO;
use PMApi\Response\Booking\BookingProviderSendResponseDTO;

class PMBookingActionRepository extends AbstractPMRepository
{
    const ENDPOINT = 'api/v1/provider/booking/send/{hotelCode}/{integrationId}';

    public function sendBookingERP(BookingProviderSendRequestDTO $bookingProviderSendRequestDTO, string $hotelCode, int $integrationId): BookingProviderSendResponseDTO
    {
        $url = str_replace(['{hotelCode}', '{integrationId}'], [$hotelCode, $integrationId], self::ENDPOINT);

        $response = $this->sendPostRequest(
            $url,
            $this->serializer->serialize($bookingProviderSendRequestDTO, 'json')
        );

        return $this->serializer->deserialize($response, BookingProviderSendResponseDTO::class, 'json');
    }
}