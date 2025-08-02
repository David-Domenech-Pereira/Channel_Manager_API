<?php

namespace Api\DTO\GetBookingRequestDTO;

class GetBookingRequestDTO
{
    private ?int $internalBookingId = null;
    private ?string $channelBookingId = null;

    public function getInternalBookingId(): ?int
    {
        return $this->internalBookingId;
    }

    public function setInternalBookingId(?int $internalBookingId): void
    {
        $this->internalBookingId = $internalBookingId;
    }

    public function getChannelBookingId(): ?string
    {
        return $this->channelBookingId;
    }

    public function setChannelBookingId(?string $channelBookingId): void
    {
        $this->channelBookingId = $channelBookingId;
    }
}