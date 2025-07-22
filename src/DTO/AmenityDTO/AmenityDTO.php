<?php

namespace Api\DTO\AmenityDTO;

class AmenityDTO
{
    private string $code;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }
}