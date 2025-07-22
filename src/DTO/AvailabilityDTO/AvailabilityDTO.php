<?php

namespace Api\DTO\AvailabilityDTO;

class AvailabilityDTO
{
    private \DateTime $date;
    private int $availableUnits;
    private int $minimumStay;
    private int $maximumStay;
    private bool $openCheckIn;
    private bool $openCheckOut;
    private bool $isClosed;

    public function getDate(): \DateTime
    {
        return $this->date;
    }

    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }

    public function getAvailableUnits(): int
    {
        return $this->availableUnits;
    }

    public function setAvailableUnits(int $availableUnits): void
    {
        $this->availableUnits = $availableUnits;
    }

    public function getMinimumStay(): int
    {
        return $this->minimumStay;
    }

    public function setMinimumStay(int $minimumStay): void
    {
        $this->minimumStay = $minimumStay;
    }

    public function getMaximumStay(): int
    {
        return $this->maximumStay;
    }

    public function setMaximumStay(int $maximumStay): void
    {
        $this->maximumStay = $maximumStay;
    }

    public function isOpenCheckIn(): bool
    {
        return $this->openCheckIn;
    }

    public function setOpenCheckIn(bool $openCheckIn): void
    {
        $this->openCheckIn = $openCheckIn;
    }

    public function isOpenCheckOut(): bool
    {
        return $this->openCheckOut;
    }

    public function setOpenCheckOut(bool $openCheckOut): void
    {
        $this->openCheckOut = $openCheckOut;
    }

    public function isClosed(): bool
    {
        return $this->isClosed;
    }

    public function setIsClosed(bool $isClosed): void
    {
        $this->isClosed = $isClosed;
    }
}