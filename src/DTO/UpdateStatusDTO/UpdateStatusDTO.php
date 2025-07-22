<?php

namespace Api\DTO\UpdateStatusDTO;

use Api\DTO\ListingDTO\ListingDTO;

class UpdateStatusDTO
{
    public const STATUS_FORCE_UPDATE = 'force_update';
    public const STATUS_PUBLISH = 'publish';
    public const STATUS_RECREATE = 'recreate';
    public const STATUS_INACTIVE = 'inactive';
    public const STATUS_SEND_CANCELLATION_POLICIES = 'send_cancellation_policies';
    private string $status;
    private string $listingCode;
    private ListingDTO $listing;

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getListingCode(): string
    {
        return $this->listingCode;
    }

    public function setListingCode(string $listingCode): void
    {
        $this->listingCode = $listingCode;
    }

    public function getListing(): ListingDTO
    {
        return $this->listing;
    }

    public function setListing(ListingDTO $listing): void
    {
        $this->listing = $listing;
    }
}