<?php

namespace PMSApi\Repository;

use PMSApi\AbstractPMSRepository;
use PMSApi\Response\Booking\CancelBookingResponseDTO;

class PMSBookingRepository extends AbstractPMSRepository
{
    const CANCEL_BOOKING_ENDPOINT = '/channel-api/v1/booking/cancel-booking/{integrationId}/{bookingId}';
    /**
     * Cancel a booking by its ID and integration interface ID.
     *
     * @param string $bookingId, it can be PMS id or channel id
     * @param int $integrationId ID of the integration interface
     * @return CancelBookingResponseDTO Response
     */
    public function cancelBooking(string $bookingId, int $integrationId): CancelBookingResponseDTO
    {
        $endpoint = str_replace('{integrationId}', (string) $integrationId, self::CANCEL_BOOKING_ENDPOINT);
        $endpoint = str_replace('{bookingId}', $bookingId, $endpoint);

        $response = $this->sendPostRequest(
            $endpoint,
            "{}" // Empty body for cancellation request
        );

        return $this->serializer->deserialize(
            $response,
            CancelBookingResponseDTO::class,
            'json'
        );
    }
}