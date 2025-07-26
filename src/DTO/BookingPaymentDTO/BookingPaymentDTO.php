<?php

namespace Api\DTO\BookingPaymentDTO;

class BookingPaymentDTO
{
    public const CURRENCY_EUR = 'EUR';
    public const CURRENCY_USD = 'USD';

    public const STATUS_NOT_PAID = 'not_paid';
    public const STATUS_PAID = 'paid';
    public const STATUS_REFUNDED = 'refunded';
    public const STATUS_FAILED = 'failed';
    private ?string $status = null;
    private ?float $amount = null;
    private ?string $currency = null;
    private ?string $paymentUrl = null;

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(?float $amount): void
    {
        $this->amount = $amount;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    public function getPaymentUrl(): ?string
    {
        return $this->paymentUrl;
    }

    public function setPaymentUrl(?string $paymentUrl): void
    {
        $this->paymentUrl = $paymentUrl;
    }
}