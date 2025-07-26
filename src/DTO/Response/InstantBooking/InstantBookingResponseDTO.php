<?php

namespace Api\DTO\Response\InstantBooking;

use Api\DTO\BookingDTO\BookingDTO;

class InstantBookingResponseDTO
{
    private ?int $statusCode = null;
    private ?BookingDTO $systemBooking = null;

    public function getStatusCode(): ?int
    {
        return $this->statusCode;
    }

    public function setStatusCode(?int $statusCode): void
    {
        $this->statusCode = $statusCode;
    }

    public function getSystemBooking(): ?BookingDTO
    {
        return $this->systemBooking;
    }

    public function setSystemBooking(?BookingDTO $systemBooking): void
    {
        $this->systemBooking = $systemBooking;
    }
}