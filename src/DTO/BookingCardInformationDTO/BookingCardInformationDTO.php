<?php

namespace Api\DTO\BookingCardInformationDTO;

class BookingCardInformationDTO
{
    private ?string $billingAddressLine1 = null;
    private ?string $billingAddressLine3 = null;
    private ?string $billingAddressLine4 = null;
    private ?string $billingCountry = null;
    private ?string $billingPostalCode = null;
    private ?string $cvv = null;
    private ?string $expiration = null;
    private ?string $maskedNumber = null;
    private ?string $nameOnCard = null;
    private ?string $number = null;
    private ?string $numberToken = null;
    private ?string $cardCode = null;
    private ?string $cardType = null;
    private ?string $CAVV = null;
    private ?string $ECI = null;
    private ?string $XID = null;
    private ?string $dsTransID = null;
    private ?string $threeDSVersion = null;
    private ?string $exceptionType = null;

    public function getBillingAddressLine1(): ?string
    {
        return $this->billingAddressLine1;
    }

    public function setBillingAddressLine1(?string $billingAddressLine1): void
    {
        $this->billingAddressLine1 = $billingAddressLine1;
    }

    public function getBillingAddressLine3(): ?string
    {
        return $this->billingAddressLine3;
    }

    public function setBillingAddressLine3(?string $billingAddressLine3): void
    {
        $this->billingAddressLine3 = $billingAddressLine3;
    }

    public function getBillingAddressLine4(): ?string
    {
        return $this->billingAddressLine4;
    }

    public function setBillingAddressLine4(?string $billingAddressLine4): void
    {
        $this->billingAddressLine4 = $billingAddressLine4;
    }

    public function getBillingCountry(): ?string
    {
        return $this->billingCountry;
    }

    public function setBillingCountry(?string $billingCountry): void
    {
        $this->billingCountry = $billingCountry;
    }

    public function getBillingPostalCode(): ?string
    {
        return $this->billingPostalCode;
    }

    public function setBillingPostalCode(?string $billingPostalCode): void
    {
        $this->billingPostalCode = $billingPostalCode;
    }

    public function getCvv(): ?string
    {
        return $this->cvv;
    }

    public function setCvv(?string $cvv): void
    {
        $this->cvv = $cvv;
    }

    public function getExpiration(): ?string
    {
        return $this->expiration;
    }

    public function setExpiration(?string $expiration): void
    {
        $this->expiration = $expiration;
    }

    public function getMaskedNumber(): ?string
    {
        return $this->maskedNumber;
    }

    public function setMaskedNumber(?string $maskedNumber): void
    {
        $this->maskedNumber = $maskedNumber;
    }

    public function getNameOnCard(): ?string
    {
        return $this->nameOnCard;
    }

    public function setNameOnCard(?string $nameOnCard): void
    {
        $this->nameOnCard = $nameOnCard;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): void
    {
        $this->number = $number;
    }

    public function getNumberToken(): ?string
    {
        return $this->numberToken;
    }

    public function setNumberToken(?string $numberToken): void
    {
        $this->numberToken = $numberToken;
    }

    public function getCardCode(): ?string
    {
        return $this->cardCode;
    }

    public function setCardCode(?string $cardCode): void
    {
        $this->cardCode = $cardCode;
    }

    public function getCardType(): ?string
    {
        return $this->cardType;
    }

    public function setCardType(?string $cardType): void
    {
        $this->cardType = $cardType;
    }

    public function getCAVV(): ?string
    {
        return $this->CAVV;
    }

    public function setCAVV(?string $CAVV): void
    {
        $this->CAVV = $CAVV;
    }

    public function getECI(): ?string
    {
        return $this->ECI;
    }

    public function setECI(?string $ECI): void
    {
        $this->ECI = $ECI;
    }

    public function getXID(): ?string
    {
        return $this->XID;
    }

    public function setXID(?string $XID): void
    {
        $this->XID = $XID;
    }

    public function getDsTransID(): ?string
    {
        return $this->dsTransID;
    }

    public function setDsTransID(?string $dsTransID): void
    {
        $this->dsTransID = $dsTransID;
    }

    public function getThreeDSVersion(): ?string
    {
        return $this->threeDSVersion;
    }

    public function setThreeDSVersion(?string $threeDSVersion): void
    {
        $this->threeDSVersion = $threeDSVersion;
    }

    public function getExceptionType(): ?string
    {
        return $this->exceptionType;
    }

    public function setExceptionType(?string $exceptionType): void
    {
        $this->exceptionType = $exceptionType;
    }
}