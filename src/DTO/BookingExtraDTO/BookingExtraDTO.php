<?php

namespace Api\DTO\BookingExtraDTO;

class BookingExtraDTO
{
    private ?string $type = null;
    private ?int $quantity = null;
    private ?float $price = null;
    private ?bool $included = null;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): void
    {
        $this->price = $price;
    }

    public function getIncluded(): ?bool
    {
        return $this->included;
    }

    public function setIncluded(?bool $included): void
    {
        $this->included = $included;
    }
}