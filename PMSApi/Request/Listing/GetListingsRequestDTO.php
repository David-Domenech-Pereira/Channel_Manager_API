<?php

namespace PMSApi\Request\Listing;

class GetListingsRequestDTO
{
    private int $maxResults = 100;
    private int $offset = 0;
    private bool $includePricing = false;
    private bool $includeAvailability = false;
    private bool $includeExtras = false;
    private bool $includeAmenities = false;
    private array $validCountryCodes = [];
    private array $validPropertyTypes = [];
    private array $countriesRequireLegalLicense = [];

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

    public function getValidCountryCodes(): array
    {
        return $this->validCountryCodes;
    }

    public function setValidCountryCodes(array $validCountryCodes): void
    {
        $this->validCountryCodes = $validCountryCodes;
    }

    public function getValidPropertyTypes(): array
    {
        return $this->validPropertyTypes;
    }

    public function setValidPropertyTypes(array $validPropertyTypes): void
    {
        $this->validPropertyTypes = $validPropertyTypes;
    }

    public function getCountriesRequireLegalLicense(): array
    {
        return $this->countriesRequireLegalLicense;
    }

    public function setCountriesRequireLegalLicense(array $countriesRequireLegalLicense): void
    {
        $this->countriesRequireLegalLicense = $countriesRequireLegalLicense;
    }
}