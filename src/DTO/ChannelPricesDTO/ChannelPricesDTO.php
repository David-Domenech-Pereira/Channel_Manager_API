<?php

namespace Api\DTO\ChannelPricesDTO;

use Api\DTO\ExtraDTO\ExtraDTO;
use Api\DTO\RatePlanDTO\RatePlanDTO;

class ChannelPricesDTO
{
    private string $listingCode;

    /**
     * @var RatePlanDTO[]
     */
    private array $ratePlans;

    /**
     * @var ExtraDTO[]
     */
    private array $extras = [];

    private int $damageDeposit = 0;

    private int $listingCapacity = 0;

    public function addRatePlan(RatePlanDTO $ratePlanDTO)
    {
        $this->ratePlans[] = $ratePlanDTO;
    }

    public function addExtra(ExtraDTO $extraDTO)
    {
        $this->extras[] = $extraDTO;
    }

    public function getListingCode(): string
    {
        return $this->listingCode;
    }

    public function setListingCode(string $listingCode): void
    {
        $this->listingCode = $listingCode;
    }

    public function getRatePlans(): array
    {
        return $this->ratePlans;
    }

    public function setRatePlans(array $ratePlans): void
    {
        $this->ratePlans = $ratePlans;
    }

    public function getExtras(): array
    {
        return $this->extras;
    }

    public function setExtras(array $extras): void
    {
        $this->extras = $extras;
    }

    public function getDamageDeposit(): int
    {
        return $this->damageDeposit;
    }

    public function setDamageDeposit(int $damageDeposit): void
    {
        $this->damageDeposit = $damageDeposit;
    }

    public function getListingCapacity(): int
    {
        return $this->listingCapacity;
    }

    public function setListingCapacity(int $listingCapacity): void
    {
        $this->listingCapacity = $listingCapacity;
    }
}