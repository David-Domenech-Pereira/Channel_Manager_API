<?php

namespace PMApi\Request\Booking;

use Api\DTO\BookingDTO\BookingDTO;

class BookingProviderSendRequestDTO
{
    public const ACTION_PREVENTIVE = 'preventive';
    public const ACTION_NEW = 'new';
    public const ACTION_UPDATE = 'update';
    public const ACTION_CANCEL = 'cancel';
    private BookingDTO $booking;
    private string $action;
    private ?string $locator;

    public function getBooking(): BookingDTO
    {
        return $this->booking;
    }

    public function setBooking(BookingDTO $booking): void
    {
        $this->booking = $booking;
    }

    public function getAction(): string
    {
        return $this->action;
    }

    public function setAction(string $action): void
    {
        $this->action = $action;
    }

    public function getLocator(): ?string
    {
        return $this->locator;
    }

    public function setLocator(?string $locator): void
    {
        $this->locator = $locator;
    }
}