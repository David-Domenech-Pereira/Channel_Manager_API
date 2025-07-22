<?php

namespace Api\DTO\Response\FindBooking;

use Api\DTO\BookingDTO\BookingDTO;

class FindBookingResponseDTO
{
    private ?BookingDTO $booking = null;
    private ?string $errorMessage = null;
    private ?int $statusCode = null;

    public function getBooking(): ?BookingDTO
    {
        return $this->booking;
    }

    public function setBooking(?BookingDTO $booking): void
    {
        $this->booking = $booking;
    }

    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    public function setErrorMessage(?string $errorMessage): void
    {
        $this->errorMessage = $errorMessage;
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