<?php

namespace Api\DTO\PriceDTO;

class PriceDTO
{
    private ?float $price = null;

    private ?\DateTime $date = null;

    private ?int $minimumStay = null;

    private ?int $maximumStay = null;

    private ?int $stay = null;

    private ?bool $openCheckIn = null;

    private ?bool $openCheckOut = null;

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): void
    {
        $this->price = $price;
    }

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    public function setDate(?\DateTime $date): void
    {
        $this->date = $date;
    }

    public function getMinimumStay(): ?int
    {
        return $this->minimumStay;
    }

    public function setMinimumStay(?int $minimumStay): void
    {
        $this->minimumStay = $minimumStay;
    }

    public function getMaximumStay(): ?int
    {
        return $this->maximumStay;
    }

    public function setMaximumStay(?int $maximumStay): void
    {
        $this->maximumStay = $maximumStay;
    }

    public function getStay(): ?int
    {
        return $this->stay;
    }

    public function setStay(?int $stay): void
    {
        $this->stay = $stay;
    }

    public function getOpenCheckIn(): ?bool
    {
        return $this->openCheckIn;
    }

    public function setOpenCheckIn(?bool $openCheckIn): void
    {
        $this->openCheckIn = $openCheckIn;
    }

    public function getOpenCheckOut(): ?bool
    {
        return $this->openCheckOut;
    }

    public function setOpenCheckOut(?bool $openCheckOut): void
    {
        $this->openCheckOut = $openCheckOut;
    }
}