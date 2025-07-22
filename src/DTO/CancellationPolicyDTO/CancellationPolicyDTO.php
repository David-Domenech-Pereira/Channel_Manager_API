<?php

namespace Api\DTO\CancellationPolicyDTO;

class CancellationPolicyDTO
{
    private ?int $id = null;

    private ?int $percentage = null;

    private ?int $freeRefundDays = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getPercentage(): ?int
    {
        return $this->percentage;
    }

    public function setPercentage(?int $percentage): void
    {
        $this->percentage = $percentage;
    }

    public function getFreeRefundDays(): ?int
    {
        return $this->freeRefundDays;
    }

    public function setFreeRefundDays(?int $freeRefundDays): void
    {
        $this->freeRefundDays = $freeRefundDays;
    }
}