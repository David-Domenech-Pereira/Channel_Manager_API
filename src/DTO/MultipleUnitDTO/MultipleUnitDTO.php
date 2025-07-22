<?php

namespace Api\DTO\MultipleUnitDTO;

use Api\DTO\MultipleUnitTypeDTO\MultipleUnitTypeDTO;

class MultipleUnitDTO
{
    private int $id;
    private MultipleUnitTypeDTO $multipleUnitType;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function getMultipleUnitType(): MultipleUnitTypeDTO
    {
        return $this->multipleUnitType;
    }
    public function setMultipleUnitType(MultipleUnitTypeDTO $multipleUnitType): void
    {
        $this->multipleUnitType = $multipleUnitType;
    }
}