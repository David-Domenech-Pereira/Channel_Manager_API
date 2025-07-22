<?php

namespace Api\DTO\CreatePullListingDTO;

use Api\DTO\ListingDTO\ListingDTO;

class CreatePullListingDTO
{
    /**
     * @var ListingDTO[]
     */
    private array $listings = [];

    public function getListings(): array
    {
        return $this->listings;
    }

    public function setListings(array $listings): void
    {
        $this->listings = $listings;
    }
}