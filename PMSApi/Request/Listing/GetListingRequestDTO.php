<?php

namespace Api\PMSApi\Request\Listing;

class GetListingRequestDTO
{
    private int $listingId;
    private string $channelListingCode;
    private bool $includePricing = false;
    private bool $includeAvailability = false;
    private bool $includeExtras = false;
    private bool $includeAmenities = false;

    public function getMaxResults(): int
    {
        return $this->maxResults;
    }

    public function setMaxResults(int $maxResults): void
    {
        $this->maxResults = $maxResults;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function setOffset(int $offset): void
    {
        $this->offset = $offset;
    }

    public function isIncludePricing(): bool
    {
        return $this->includePricing;
    }

    public function setIncludePricing(bool $includePricing): void
    {
        $this->includePricing = $includePricing;
    }

    public function isIncludeAvailability(): bool
    {
        return $this->includeAvailability;
    }

    public function setIncludeAvailability(bool $includeAvailability): void
    {
        $this->includeAvailability = $includeAvailability;
    }

    public function isIncludeExtras(): bool
    {
        return $this->includeExtras;
    }

    public function setIncludeExtras(bool $includeExtras): void
    {
        $this->includeExtras = $includeExtras;
    }

    public function isIncludeAmenities(): bool
    {
        return $this->includeAmenities;
    }

    public function setIncludeAmenities(bool $includeAmenities): void
    {
        $this->includeAmenities = $includeAmenities;
    }

    public function getListingId(): int
    {
        return $this->listingId;
    }

    public function setListingId(int $listingId): void
    {
        $this->listingId = $listingId;
    }

    public function getChannelListingCode(): string
    {
        return $this->channelListingCode;
    }

    public function setChannelListingCode(string $channelListingCode): void
    {
        $this->channelListingCode = $channelListingCode;
    }
}