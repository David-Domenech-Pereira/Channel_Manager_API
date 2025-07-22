<?php

namespace Api\DTO\Response\SendAvailability;

class SendAvailabilityResponseDTO
{
    public const STATUS_SUCCESS = 0;
    public const ERROR_LISTING_NOT_FOUND = -1;
    public const ERROR_INTEGRATION_NOT_FOUND = -2;
    public const ERROR_LISTING_NOT_ACTIVE = -3;
    public const ERROR_INTERNAL = -4;
    public const ERROR_NOT_IMPLEMENTED = -5;
    public const ERROR_BAD_REQUEST = -6;

    private int $status;
    private string $message = '';

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }
}