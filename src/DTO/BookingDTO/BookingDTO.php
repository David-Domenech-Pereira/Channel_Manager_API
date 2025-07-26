<?php

namespace Api\DTO\BookingDTO;

use Api\DTO\BookingExtraDTO\BookingExtraDTO;
use Api\DTO\BookingPaymentDTO\BookingPaymentDTO;
use Api\DTO\CheckinInformationDTO\CheckinInformationDTO;
use Api\DTO\GuestDTO\GuestDTO;

class BookingDTO
{
    public const STATUS_PENDING = 1;
    public const STATUS_CANCELLED = 2;
    public const STATUS_CONFIRMED = 3; //Pasa a confirmado cuando le ha llegado el ERP al proveedor
    public const STATUS_PENDING_PAYMENT = 4;
    public const STATUS_CHECKED_IN = 5;
    public const STATUS_CHECKED_OUT = 6;
    private string $externalId;
    private ?string $listingCode = null;
    private ?string $unitTypeCode = null;
    private ?string $unitCode = null;
    private ?int $status = null;
    private ?\DateTime $checkIn = null;
    private ?\DateTime $checkOut = null;
    private ?int $pets = null;
    private ?float $totalPrice = null;
    private ?float $commissionablePrice = null;
    private ?int $deposit = null;
    private ?float $payoutAmount = null;
    private ?string $comments = null;
    private ?float $pricePerNight = null;
    private ?int $nights = null;
    private ?CheckinInformationDTO $checkinInformation = null;
    private ?string $language = null;
    /**
     * @var GuestDTO[]
     */
    private array $guests = [];

    /**
     * @var BookingExtraDTO[]
     */
    private array $extras = [];

    /**
     * @var BookingPaymentDTO[]
     */
    private array $payments = [];
    private ?string $clientCountryCode = null;
    private ?int $ratePlanId = null;

    public function getExternalId(): string
    {
        return $this->externalId;
    }

    public function setExternalId(string $externalId): void
    {
        $this->externalId = $externalId;
    }

    public function getListingCode(): ?string
    {
        return $this->listingCode;
    }

    public function setListingCode(?string $listingCode): void
    {
        $this->listingCode = $listingCode;
    }

    public function getUnitTypeCode(): ?string
    {
        return $this->unitTypeCode;
    }

    public function setUnitTypeCode(?string $unitTypeCode): void
    {
        $this->unitTypeCode = $unitTypeCode;
    }

    public function getUnitCode(): ?string
    {
        return $this->unitCode;
    }

    public function setUnitCode(?string $unitCode): void
    {
        $this->unitCode = $unitCode;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(?int $status): void
    {
        $this->status = $status;
    }

    public function getCheckIn(): ?\DateTime
    {
        return $this->checkIn;
    }

    public function setCheckIn(?\DateTime $checkIn): void
    {
        $this->checkIn = $checkIn;
    }

    public function getCheckOut(): ?\DateTime
    {
        return $this->checkOut;
    }

    public function setCheckOut(?\DateTime $checkOut): void
    {
        $this->checkOut = $checkOut;
    }

    public function getPets(): ?int
    {
        return $this->pets;
    }

    public function setPets(?int $pets): void
    {
        $this->pets = $pets;
    }

    public function getTotalPrice(): ?float
    {
        return $this->totalPrice;
    }

    public function setTotalPrice(?float $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }

    public function getCommissionablePrice(): ?float
    {
        return $this->commissionablePrice;
    }

    public function setCommissionablePrice(?float $commissionablePrice): void
    {
        $this->commissionablePrice = $commissionablePrice;
    }

    public function getDeposit(): ?int
    {
        return $this->deposit;
    }

    public function setDeposit(?int $deposit): void
    {
        $this->deposit = $deposit;
    }

    public function getPayoutAmount(): ?float
    {
        return $this->payoutAmount;
    }

    public function setPayoutAmount(?float $payoutAmount): void
    {
        $this->payoutAmount = $payoutAmount;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(?string $comments): void
    {
        $this->comments = $comments;
    }

    public function getPricePerNight(): ?float
    {
        return $this->pricePerNight;
    }

    public function setPricePerNight(?float $pricePerNight): void
    {
        $this->pricePerNight = $pricePerNight;
    }

    public function getNights(): ?int
    {
        return $this->nights;
    }

    public function setNights(?int $nights): void
    {
        $this->nights = $nights;
    }

    public function getCheckinInformation(): ?CheckinInformationDTO
    {
        return $this->checkinInformation;
    }

    public function setCheckinInformation(?CheckinInformationDTO $checkinInformation): void
    {
        $this->checkinInformation = $checkinInformation;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): void
    {
        $this->language = $language;
    }

    public function getGuests(): array
    {
        return $this->guests;
    }

    public function setGuests(array $guests): void
    {
        $this->guests = $guests;
    }

    public function getExtras(): array
    {
        return $this->extras;
    }

    public function setExtras(array $extras): void
    {
        $this->extras = $extras;
    }

    public function getClientCountryCode(): ?string
    {
        return $this->clientCountryCode;
    }

    public function setClientCountryCode(?string $clientCountryCode): void
    {
        $this->clientCountryCode = $clientCountryCode;
    }

    public function getRatePlanId(): ?int
    {
        return $this->ratePlanId;
    }

    public function setRatePlanId(?int $ratePlanId): void
    {
        $this->ratePlanId = $ratePlanId;
    }

    public function addExtra(BookingExtraDTO $extra): void
    {
        $this->extras[] = $extra;
    }

    public function addGuest(GuestDTO $guest): void
    {
        $this->guests[] = $guest;
    }

    public function getPayments(): array
    {
        return $this->payments;
    }

    public function setPayments(array $payments): void
    {
        $this->payments = $payments;
    }
}