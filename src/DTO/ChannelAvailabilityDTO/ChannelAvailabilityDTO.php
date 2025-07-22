<?php

namespace Api\DTO\ChannelAvailabilityDTO;

use Api\DTO\AvailabilityDTO\AvailabilityDTO;

class ChannelAvailabilityDTO
{
    private string $listingCode;

    /**
     * @var AvailabilityDTO[]
     */
    private array $availability = [];

    public function getListingCode(): string
    {
        return $this->listingCode;
    }

    public function setListingCode(string $listingCode): void
    {
        $this->listingCode = $listingCode;
    }

    public function getAvailability(): array
    {
        return $this->availability;
    }

    public function setAvailability(array $availability): void
    {
        $this->availability = $availability;
    }

    public function addAvailability($availabilityDTO)
    {
        $this->availability[] = $availabilityDTO;
    }
}