<?php

namespace Api\DTO\Response\GetBooking;

use Api\DTO\BookingDTO\BookingDTO;

class GetBookingResponseDTO
{
    private ?int $statusCode = null;
    private ?BookingDTO $booking = null;

    public function getBooking(): ?BookingDTO
    {
        return $this->booking;
    }

    public function setBooking(?BookingDTO $booking): void
    {
        $this->booking = $booking;
    }

    public function getStatusCode(): ?int
    {
        return $this->statusCode;
    }

    public function setStatusCode(?int $statusCode): void
    {
        $this->statusCode = $statusCode;
    }
}