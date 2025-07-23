<?php

namespace Api\DTO\RatePlanDTO;

use Api\DTO\CancellationPolicyDTO\CancellationPolicyDTO;
use Api\DTO\LosPriceDTO\LosPriceDTO;
use App\Entity\CancellationPolicy;

class RatePlanDTO
{
    public const MEAL_PLAN_SA = 1;
    public const MEAL_PLAN_AD = 2;
    public const MEAL_PLAN_MP = 3;
    public const MEAL_PLAN_PC = 4;
    public const MEAL_PLAN_TI = 5;
    private ?int $id = null;
    /**
     * @var CancellationPolicyDTO[]
     */
    private array|null $cancellationPolicy = null;

    private ?int $pricingOffset = null;

    private ?int $minDaysBeforeArrival = null;

    private ?int $maxDaysBeforeArrival = null;

    private ?int $minStay = null;

    private ?int $mealPlan = null;

    /**
     * @var LosPriceDTO[]
     */
    private array $losPrices = [];

    public function getCancellationPolicy(): ?array
    {
        return $this->cancellationPolicy;
    }

    public function setCancellationPolicy(?array $cancellationPolicy): void
    {
        $this->cancellationPolicy = $cancellationPolicy;
    }

    public function getPricingOffset(): ?int
    {
        return $this->pricingOffset;
    }

    public function setPricingOffset(?int $pricingOffset): void
    {
        $this->pricingOffset = $pricingOffset;
    }

    public function getMinDaysBeforeArrival(): ?int
    {
        return $this->minDaysBeforeArrival;
    }

    public function setMinDaysBeforeArrival(?int $minDaysBeforeArrival): void
    {
        $this->minDaysBeforeArrival = $minDaysBeforeArrival;
    }

    public function getMaxDaysBeforeArrival(): ?int
    {
        return $this->maxDaysBeforeArrival;
    }

    public function setMaxDaysBeforeArrival(?int $maxDaysBeforeArrival): void
    {
        $this->maxDaysBeforeArrival = $maxDaysBeforeArrival;
    }

    public function getMinStay(): ?int
    {
        return $this->minStay;
    }

    public function setMinStay(?int $minStay): void
    {
        $this->minStay = $minStay;
    }

    public function getMealPlan(): ?int
    {
        return $this->mealPlan;
    }

    public function setMealPlan(?int $mealPlan): void
    {
        $this->mealPlan = $mealPlan;
    }

    public function getLosPrices(): array
    {
        return $this->losPrices;
    }

    public function setLosPrices(array $losPrices): void
    {
        $this->losPrices = $losPrices;
    }

    public function addLosPrice(LosPriceDTO $losPricing)
    {
        $this->losPrices[] = $losPricing;
    }

    public function addCancellationPolicy($cancellationPolicyDTO)
    {
        if (null === $this->cancellationPolicy) {
            $this->cancellationPolicy = [];
        }
        $this->cancellationPolicy[] = $cancellationPolicyDTO;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getFreeCancellation()
    {
        if ($this->getCancellationPolicy()[0]->getFreeRefundDays() == 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getEarliestCancellationPolicy(): ?CancellationPolicyDTO
    {
        $cancellationPolicy = $this->getCancellationPolicy();

        if (count($cancellationPolicy) === 0) {
            return null;
        }

        $maxFreeRefundDays = 0;
        $policyWithMaxFreeRefundDays = null;
        foreach ($cancellationPolicy as $policy) {
            if ($policy->getFreeRefundDays() > $maxFreeRefundDays) {
                $maxFreeRefundDays = $policy->getFreeRefundDays();
                $policyWithMaxFreeRefundDays = $policy;
            }
        }

        return $policyWithMaxFreeRefundDays;
    }
}