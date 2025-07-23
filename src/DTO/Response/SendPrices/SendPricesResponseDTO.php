<?php

namespace Api\DTO\Response\SendPrices;

class SendPricesResponseDTO
{
    /** @deprecated use the codes from ResponseCodesDTO */
    public const STATUS_SUCCESS = 0;
    /** @deprecated use the codes from ResponseCodesDTO */
    public const ERROR_LISTING_NOT_FOUND = -1;
    /** @deprecated use the codes from ResponseCodesDTO */
    public const ERROR_INTEGRATION_NOT_FOUND = -2;
    /** @deprecated use the codes from ResponseCodesDTO */
    public const ERROR_LISTING_NOT_ACTIVE = -3;
    /** @deprecated use the codes from ResponseCodesDTO */
    public const ERROR_INTERNAL = -4;
    /** @deprecated use the codes from ResponseCodesDTO */
    public const ERROR_NOT_IMPLEMENTED = -5;
    /** @deprecated use the codes from ResponseCodesDTO */
    public const ERROR_BAD_REQUEST = -6;
    /** @deprecated use the codes from ResponseCodesDTO */
    public const ERROR_NO_PRICES = -7;

    private int $status;
    private string $message = '';

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }
}