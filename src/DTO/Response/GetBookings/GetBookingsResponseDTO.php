<?php

namespace Api\DTO\Response\GetBookings;

use Api\DTO\BookingDTO\BookingDTO;

class GetBookingsResponseDTO
{
    private ?int $statusCode = null;

    /** @var BookingDTO[] $bookings */
    private ?array $bookings = null;

    public function getStatusCode(): ?int
    {
        return $this->statusCode;
    }

    public function setStatusCode(?int $statusCode): void
    {
        $this->statusCode = $statusCode;
    }

    public function getBookings(): ?array
    {
        return $this->bookings;
    }

    public function setBookings(?array $bookings): void
    {
        $this->bookings = $bookings;
    }
}