<?php

namespace Api\DTO\BookingCancellationPolicyDTO;

class BookingCancellationPolicyDTO
{
    private \DateTime $deadline;
    private ?float $amount = null;
    private ?int $penaltyPercentage = null;

    public function getDeadline(): \DateTime
    {
        return $this->deadline;
    }

    public function setDeadline(\DateTime $deadline): void
    {
        $this->deadline = $deadline;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(?float $amount): void
    {
        $this->amount = $amount;
    }

    public function getPenaltyPercentage(): ?int
    {
        return $this->penaltyPercentage;
    }

    public function setPenaltyPercentage(?int $penaltyPercentage): void
    {
        $this->penaltyPercentage = $penaltyPercentage;
    }
}