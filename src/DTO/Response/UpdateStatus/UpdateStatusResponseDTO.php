<?php

namespace Api\DTO\Response\UpdateStatus;

class UpdateStatusResponseDTO
{
    public const STATUS_SUCCESS = 0;
    public const ERROR_INTEGRATION_NOT_FOUND = -2;
    public const ERROR_INTERNAL = -4;

    private int $status;
    private ?string $url = null;
    private ?string $message = null;

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }
}