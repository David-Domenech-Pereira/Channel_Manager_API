<?php

namespace Api\DTO\MultipleUnitDTO;

class MultipleUnitDTO
{
    private int $id;
    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
}