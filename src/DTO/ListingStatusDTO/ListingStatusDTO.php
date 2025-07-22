<?php

namespace Api\DTO\ListingStatusDTO;

class ListingStatusDTO
{
    public const STATUS_ACTIVE = 'active';
    public const STATUS_INACTIVE = 'inactive';
    public const STATUS_UNKNOWN = 'unknown';
    public const STATUS_NOT_IMPLEMENTED = 'not_implemented';
    private ?string $listingCode = null;
    private ?string $status = null;
    private ?string $url = null;

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    public function getListingCode(): ?string
    {
        return $this->listingCode;
    }

    public function setListingCode(?string $listingCode): void
    {
        $this->listingCode = $listingCode;
    }
}