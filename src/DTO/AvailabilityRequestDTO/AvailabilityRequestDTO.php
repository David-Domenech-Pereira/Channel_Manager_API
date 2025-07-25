<?php

namespace Api\DTO\AvailabilityRequestDTO;

use Api\DTO\RatePlanDTO\RatePlanDTO;

class AvailabilityRequestDTO
{
    private ?string $channelListingCode = null;
    private ?int $listingId = null;
    private ?int $multipleUnitTypeId = null;
    private ?int $multipleUnitId = null;
    private int $integrationId;
    private \DateTime $startDate;
    private \DateTime $endDate;
    private int $adults;
    private int $children;
    private int $mealPlanId = RatePlanDTO::MEAL_PLAN_SA;

    public function __construct(
        int $integrationId,
        \DateTime $startDate,
        \DateTime $endDate,
        int $adults,
        int $children,
        ?string $channelListingCode = null,
        ?int $listingId = null,
        ?int $multipleUnitTypeId = null,
        ?int $multipleUnitId = null,
        int $mealPlanId = RatePlanDTO::MEAL_PLAN_SA
    ) {
        $this->integrationId = $integrationId;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->adults = $adults;
        $this->children = $children;
        $this->channelListingCode = $channelListingCode;
        $this->listingId = $listingId;
        $this->multipleUnitTypeId = $multipleUnitTypeId;
        $this->multipleUnitId = $multipleUnitId;
        $this->mealPlanId = $mealPlanId;
    }

    public function getChannelListingCode(): ?string
    {
        return $this->channelListingCode;
    }

    public function setChannelListingCode(?string $channelListingCode): void
    {
        $this->channelListingCode = $channelListingCode;
    }

    public function getListingId(): ?int
    {
        return $this->listingId;
    }

    public function setListingId(?int $listingId): void
    {
        $this->listingId = $listingId;
    }

    public function getMultipleUnitTypeId(): ?int
    {
        return $this->multipleUnitTypeId;
    }

    public function setMultipleUnitTypeId(?int $multipleUnitTypeId): void
    {
        $this->multipleUnitTypeId = $multipleUnitTypeId;
    }

    public function getMultipleUnitId(): ?int
    {
        return $this->multipleUnitId;
    }

    public function setMultipleUnitId(?int $multipleUnitId): void
    {
        $this->multipleUnitId = $multipleUnitId;
    }

    public function getIntegrationId(): int
    {
        return $this->integrationId;
    }

    public function setIntegrationId(int $integrationId): void
    {
        $this->integrationId = $integrationId;
    }

    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTime $startDate): void
    {
        $this->startDate = $startDate;
    }

    public function getEndDate(): \DateTime
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTime $endDate): void
    {
        $this->endDate = $endDate;
    }

    public function getAdults(): int
    {
        return $this->adults;
    }

    public function setAdults(int $adults): void
    {
        $this->adults = $adults;
    }

    public function getChildren(): int
    {
        return $this->children;
    }

    public function setChildren(int $children): void
    {
        $this->children = $children;
    }

    public function getMealPlanId(): int
    {
        return $this->mealPlanId;
    }

    public function setMealPlanId(int $mealPlanId): void
    {
        $this->mealPlanId = $mealPlanId;
    }
}