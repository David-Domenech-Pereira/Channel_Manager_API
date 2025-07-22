<?php

namespace Api\DTO\ExtraDTO;

class ExtraDTO
{
    private ?int $id = null;
    private ?string $code = null;

    private ?string $name = null;

    private ?string $description = null;

    private ?float $price = null;
    private ?bool $isMandatory = null;

    private ?bool $isAvailable = null;

    private ?bool $isComissionable = true;
    private ?bool $isPaidOnArrival = false;

    private ?string $priceType = null;

    private ?bool $isPercentage = null;
    private ?int $type = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): void
    {
        $this->price = $price;
    }

    public function getIsMandatory(): ?bool
    {
        return $this->isMandatory;
    }

    public function setIsMandatory(?bool $isMandatory): void
    {
        $this->isMandatory = $isMandatory;
    }

    public function getIsAvailable(): ?bool
    {
        return $this->isAvailable;
    }

    public function setIsAvailable(?bool $isAvailable): void
    {
        $this->isAvailable = $isAvailable;
    }

    public function getIsComissionable(): ?bool
    {
        return $this->isComissionable;
    }

    public function setIsComissionable(?bool $isComissionable): void
    {
        $this->isComissionable = $isComissionable;
    }

    public function getIsPaidOnArrival(): ?bool
    {
        return $this->isPaidOnArrival;
    }

    public function setIsPaidOnArrival(?bool $isPaidOnArrival): void
    {
        $this->isPaidOnArrival = $isPaidOnArrival;
    }

    public function getPriceType(): ?string
    {
        return $this->priceType;
    }

    public function setPriceType(?string $priceType): void
    {
        $this->priceType = $priceType;
    }

    public function getIsPercentage(): ?bool
    {
        return $this->isPercentage;
    }

    public function setIsPercentage(?bool $isPercentage): void
    {
        $this->isPercentage = $isPercentage;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): void
    {
        $this->type = $type;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): void
    {
        $this->code = $code;
    }
}