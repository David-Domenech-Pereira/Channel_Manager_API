<?php

namespace Api\DTO\Response\InstantBooking;

use Api\DTO\BookingDTO\BookingDTO;

class InstantBookingResponseDTO
{
    private ?int $statusCode = null;
    private ?BookingDTO $systemBooking = null;
}