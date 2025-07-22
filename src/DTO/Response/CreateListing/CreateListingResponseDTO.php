<?php

namespace Api\DTO\Response\CreateListing;

class CreateListingResponseDTO
{
    public const STATUS_SUCCESS = 0;

    public const ERROR_PROPERTY_TYPE_NOT_ALLOWED = -1;
    public const ERROR_BED_TYPE_NOT_ALLOWED = -2;
    public const ERROR_INTEGRATION_NOT_FOUND = -3;
    public const ERROR_INTERNAL = -4;
    public const ERROR_DESCRIPTION_NOT_FOUND = -5;
    public const ERROR_NOT_ALLOWED = -6;


    public const REQUIRED_PRICING_ACTION = 'required_pricing_action';
    public const REQUIRED_AVAILABILITY_ACTION = 'required_availability_action';
    public const REQUIRED_PHOTO_ACTION = 'required_photo_action';
    public const REQUIRED_PUBLISHING_ACTION = 'required_publishing_action';
    public const REQUIRED_CANCELLATION_POLICIES_ACTION = 'required_cancellation_policies_action';

    private int $status;
    private string $message = '';
    /**
     * @var string[]
     */
    private array $listingCodes = [];
    /**
     * @var string[]
     */
    private array $requiredActions = [];

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

    public function getListingCodes(): array
    {
        return $this->listingCodes;
    }

    public function setListingCodes(array $listingCodes): void
    {
        $this->listingCodes = $listingCodes;
    }

    public function getRequiredActions(): array
    {
        return $this->requiredActions;
    }

    public function setRequiredActions(array $requiredActions): void
    {
        $this->requiredActions = $requiredActions;
    }


}