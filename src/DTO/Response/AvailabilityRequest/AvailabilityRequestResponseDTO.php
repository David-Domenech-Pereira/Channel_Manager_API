<?php

namespace Api\DTO\Response\AvailabilityRequest;

class AvailabilityRequestResponseDTO
{
    private bool $available;
    private float $netPrice;
    private float $totalSellingPrice;
    private float $excludedMandatoryTaxesPrice;
    private ?string $noAvailabilityReason = null;

    /**
     * @param bool $available
     * @param float $netPrice
     * @param float $totalSellingPrice
     * @param float $excludedMandatoryTaxesPrice
     * @param string|null $noAvailabilityReason
     */
    public function __construct(bool $available, float $netPrice, float $totalSellingPrice, float $excludedMandatoryTaxesPrice, ?string $noAvailabilityReason = null)
    {
        $this->available = $available;
        $this->netPrice = $netPrice;
        $this->totalSellingPrice = $totalSellingPrice;
        $this->excludedMandatoryTaxesPrice = $excludedMandatoryTaxesPrice;
        $this->noAvailabilityReason = $noAvailabilityReason;
    }

    public function isAvailable(): bool
    {
        return $this->isAvailable;
    }

    public function getAvailable(): bool
    {
        return $this->available;
    }

    public function setIsAvailable(bool $isAvailable): void
    {
        $this->isAvailable = $isAvailable;
    }

    public function setAvailable(bool $available): void
    {
        $this->available = $available;
    }

    public function getNetPrice(): float
    {
        return $this->netPrice;
    }

    public function setNetPrice(float $netPrice): void
    {
        $this->netPrice = $netPrice;
    }

    public function getTotalSellingPrice(): float
    {
        return $this->totalSellingPrice;
    }

    public function setTotalSellingPrice(float $totalSellingPrice): void
    {
        $this->totalSellingPrice = $totalSellingPrice;
    }

    public function getExcludedMandatoryTaxesPrice(): float
    {
        return $this->excludedMandatoryTaxesPrice;
    }

    public function setExcludedMandatoryTaxesPrice(float $excludedMandatoryTaxesPrice): void
    {
        $this->excludedMandatoryTaxesPrice = $excludedMandatoryTaxesPrice;
    }

    public function getNoAvailabilityReason(): ?string
    {
        return $this->noAvailabilityReason;
    }

    public function setNoAvailabilityReason(?string $noAvailabilityReason): void
    {
        $this->noAvailabilityReason = $noAvailabilityReason;
    }
}