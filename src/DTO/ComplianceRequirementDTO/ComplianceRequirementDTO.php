<?php

namespace Api\DTO\ComplianceRequirementDTO;

class ComplianceRequirementDTO
{
    public const ENTITY_TYPE_BUSINESS = 1;
    public const ENTITY_TYPE_INDIVIDUAL = 2;

    public const TYPE_TOURISM_LICENSE = 1;
    public const TYPE_RESIDENCE_TYPE = 2;
    public const TYPE_IS_PROFESSIONAL_REGISTERED_COUNTRY = 3;
    public const TYPE_IS_VAT_REGISTERED_COUNTRY = 4;
    public const TYPE_IS_DECLARE_REVENUE_COUNTRY = 5;
    public const TYPE_PROPERTY_CATEGORY = 6;
    public const TYPE_IS_OWNER_ON_COUNTRY = 7;
    public const TYPE_VAT_NUMBER = 8;
    public const TYPE_IS_ADDRESS_IN_EU = 9;
    public const TYPE_IS_RESIDENCE_IN_EU = 10;
    public const TYPE_OWNER_NAME = 11;
    public const TYPE_CADASTRAL_REFERENCE = 12;
    public const TYPE_OWNER_IDENTITY_DOCUMENT = 13;
    public const TYPE_REGISTRATION_NUMBER = 14;
    public const TYPE_ENTITY_TYPE = 15;
    public const TYPE_IS_TRADED = 16;
    public const TYPE_IS_GOVERNMENT_ENTITY = 17;
    public const TYPE_LEGAL_ADDRESS = 18;
    public const TYPE_ISSUED_TAX_ID = 19;
    public const TYPE_PERMANENT_ESTABLISHMENT_COUNTRY = 20;
    public const TYPE_BUSINESS_REGISTRATION_NUMBER = 21;
    public const TYPE_BUSINESS_ISSUING_REGISTRY = 22;
    public const TYPE_LAND_REGISTRATION_NUMBER = 23;
    public const TYPE_BIRTH_DATE = 24;
    public const TYPE_AUSTRALIAN_BUSINESS_NUMBER = 25;

    private int $type;
    private string $value;
    private ?string $additionalInfo = null;
    private bool $isRequired = false;

    public function getType(): int
    {
        return $this->type;
    }

    public function setType(int $type): void
    {
        $this->type = $type;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    public function getAdditionalInfo(): ?string
    {
        return $this->additionalInfo;
    }

    public function setAdditionalInfo(?string $additionalInfo): void
    {
        $this->additionalInfo = $additionalInfo;
    }

    public function isRequired(): bool
    {
        return $this->isRequired;
    }

    public function setIsRequired(bool $isRequired): void
    {
        $this->isRequired = $isRequired;
    }
}