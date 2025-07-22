<?php

namespace Api\DTO\BedDTO;

class BedDTO
{
    public const ID_SINGLE = 1;
    public const ID_DOUBLE = 2;
    public const ID_SINGLE_BUNK_BED = 3;
    public const ID_DOUBLE_BUNK_BED = 4;
    public const ID_SINGLE_SOFABED = 5;
    public const ID_DOUBLE_SOFABED = 6;
    public const ID_ROLLAWAYS_ON_DEMAND = 7;
    private int $type;
    private int $amount;
    private int $capacity;

    public function getType(): int
    {
        return $this->type;
    }

    public function setType(int $type): void
    {
        $this->type = $type;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    public function getCapacity(): int
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }
}