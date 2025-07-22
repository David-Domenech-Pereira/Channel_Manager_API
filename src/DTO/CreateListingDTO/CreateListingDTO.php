<?php

namespace Api\DTO\CreateListingDTO;

use Api\DTO\ListingDTO\ListingDTO;

class CreateListingDTO
{
    private ListingDTO $listing;

    public function getListing(): ListingDTO
    {
        return $this->listing;
    }

    public function setListing(ListingDTO $listing): void
    {
        $this->listing = $listing;
    }
}