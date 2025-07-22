<?php

namespace Api\Booking;

use Api\AbstractChannelsRepository;
use Api\DTO\Response\FindBooking\FindBookingResponseDTO;

class ChannelBookingRepository extends AbstractChannelsRepository
{
    private const ENDPOINT = 'api/v1/booking/{integrationId}/{bookingId}';
    public function find(string $bookingId, int $integrationId): FindBookingResponseDTO
    {
        $endpoint = str_replace(
            ['{integrationId}', '{bookingId}'],
            [(string) $integrationId, $bookingId],
            self::ENDPOINT
        );

        $response = $this->sendGetRequest($endpoint);

        return $this->serializer->deserialize(
            $response,
            FindBookingResponseDTO::class,
            'json'
        );
    }
}