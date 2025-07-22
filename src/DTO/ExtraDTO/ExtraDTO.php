<?php

namespace Api\DTO\ExtraDTO;

class ExtraDTO
{
    public const ID_FORCED_VAT = 654089;
    public const PRICE_TYPE_FIXED = 'fixed';
    public const PRICE_TYPE_NIGHTLY = 'nightly';
    public const PRICE_TYPE_DAILY = 'daily';
    public const PRICE_TYPE_PER_ADULT = 'per_adult';
    public const PRICE_TYPE_PER_CHILD = 'per_child';
    public const PRICE_TYPE_PER_PERSON = 'per_person';
    public const PRICE_TYPE_PER_ADULT_NIGHTLY = 'per_adult_nightly';
    public const PRICE_TYPE_PER_CHILD_NIGHTLY = 'per_child_nightly';
    public const PRICE_TYPE_PER_PERSON_NIGHTLY = 'per_person_nightly';
    public const PRICE_TYPE_PER_UNIT = 'per_unit';
    public const PRICE_TYPE_PER_UNIT_NIGHTLY = 'per_unit_nightly';
    public const PRICE_TYPE_PERCENTAGE = 'percentage';


    public const TYPE_TAX = 1;
    public const TYPES_CLEANING = [
        29,
        60,
        78,
        101,
        114,
        133,
        166,
        228,
        287,
        295,
        316,
        323,
        343,
        352,
        410,
        422,
        469,
        514,
    ];
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

    public function isIncludedInPrice(): bool
    {
        return $this->getPrice() == 0;
    }

    public function getIsPricePerPerson(): ?bool
    {
        return
            $this->priceType == self::PRICE_TYPE_PER_PERSON ||
            $this->priceType == self::PRICE_TYPE_PER_PERSON_NIGHTLY;
    }

    public function isPricePerNight()
    {
        return
            $this->priceType == self::PRICE_TYPE_NIGHTLY ||
            $this->priceType == self::PRICE_TYPE_PER_ADULT_NIGHTLY ||
            $this->priceType == self::PRICE_TYPE_PER_CHILD_NIGHTLY ||
            $this->priceType == self::PRICE_TYPE_PER_PERSON_NIGHTLY ||
            $this->priceType == self::PRICE_TYPE_PER_UNIT_NIGHTLY ||
            $this->priceType == self::PRICE_TYPE_DAILY;
    }
}