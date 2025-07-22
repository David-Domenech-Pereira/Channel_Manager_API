<?php

namespace Api\DTO\CheckinInformationDTO;

class CheckinInformationDTO
{
    private ?string $checkinTime = null;
    private ?string $phoneNumber = null;
    private ?string $email = null;

    public function getCheckinTime(): ?string
    {
        return $this->checkinTime;
    }

    public function setCheckinTime(?string $checkinTime): void
    {
        $this->checkinTime = $checkinTime;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }
}