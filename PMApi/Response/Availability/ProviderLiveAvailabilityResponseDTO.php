<?php

namespace PMApi\Response\Availability;

class ProviderLiveAvailabilityResponseDTO
{
    private int $status;
    private bool $available;
    private ?array $rateKeys = [];
    private float $netPrice = 0;
    private float $sellingPrice = 0;

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    public function isAvailable(): bool
    {
        return $this->available;
    }

    public function getAvailable(): bool
    {
        return $this->available;
    }

    public function setIsAvailable(bool $isAvailable): void
    {
        $this->available = $isAvailable;
    }

    public function setAvailable(bool $isAvailable): void
    {
        $this->available = $isAvailable;
    }

    public function getRateKeys(): ?array
    {
        return $this->rateKeys;
    }

    public function setRateKeys(?array $rateKeys): void
    {
        $this->rateKeys = $rateKeys;
    }

    public function getNetPrice(): float
    {
        return $this->netPrice;
    }

    public function setNetPrice(float $netPrice): void
    {
        $this->netPrice = $netPrice;
    }

    public function getSellingPrice(): float
    {
        return $this->sellingPrice;
    }

    public function setSellingPrice(float $sellingPrice): void
    {
        $this->sellingPrice = $sellingPrice;
    }
}