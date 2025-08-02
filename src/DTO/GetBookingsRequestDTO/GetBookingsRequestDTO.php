<?php

namespace Api\DTO\GetBookingsRequestDTO;

class GetBookingsRequestDTO
{
    private ?\DateTime $checkInStartDate = null;
    private ?\DateTime $checkInEndDate = null;
    private ?\DateTime $createdStartDate = null;
    private ?\DateTime $createdEndDate = null;
    private ?\DateTime $modifiedStartDate = null;
    private ?\DateTime $modifiedEndDate = null;

    public function getCheckInStartDate(): ?\DateTime
    {
        return $this->checkInStartDate;
    }

    public function setCheckInStartDate(?\DateTime $checkInStartDate): void
    {
        $this->checkInStartDate = $checkInStartDate;
    }

    public function getCheckInEndDate(): ?\DateTime
    {
        return $this->checkInEndDate;
    }

    public function setCheckInEndDate(?\DateTime $checkInEndDate): void
    {
        $this->checkInEndDate = $checkInEndDate;
    }

    public function getCreatedStartDate(): ?\DateTime
    {
        return $this->createdStartDate;
    }

    public function setCreatedStartDate(?\DateTime $createdStartDate): void
    {
        $this->createdStartDate = $createdStartDate;
    }

    public function getCreatedEndDate(): ?\DateTime
    {
        return $this->createdEndDate;
    }

    public function setCreatedEndDate(?\DateTime $createdEndDate): void
    {
        $this->createdEndDate = $createdEndDate;
    }

    public function getModifiedStartDate(): ?\DateTime
    {
        return $this->modifiedStartDate;
    }

    public function setModifiedStartDate(?\DateTime $modifiedStartDate): void
    {
        $this->modifiedStartDate = $modifiedStartDate;
    }

    public function getModifiedEndDate(): ?\DateTime
    {
        return $this->modifiedEndDate;
    }

    public function setModifiedEndDate(?\DateTime $modifiedEndDate): void
    {
        $this->modifiedEndDate = $modifiedEndDate;
    }
}