<?php

namespace Api\DTO\Response\GetListings;

use Api\DTO\ListingStatusDTO\ListingStatusDTO;

class GetListingsResponseDTO
{
    /**
     * @var string[] Array of listing IDs
     */
    private ?array $listings = null;
    private ?string $errorMessage = null;
    private ?int $statusCode = null;

    public function __construct(
        ?string $errorMessage = null,
        ?int $statusCode = null,
        ?ListingStatusDTO $listingStatus = null,
    ) {
        $this->listingStatus = $listingStatus;
        $this->errorMessage = $errorMessage;
        $this->statusCode = $statusCode;
    }

    public function getListings(): ?array
    {
        return $this->listings;
    }

    public function setListings(?array $listings): void
    {
        $this->listings = $listings;
    }

    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    public function setErrorMessage(?string $errorMessage): void
    {
        $this->errorMessage = $errorMessage;
    }

    public function getStatusCode(): ?int
    {
        return $this->statusCode;
    }

    public function setStatusCode(?int $statusCode): void
    {
        $this->statusCode = $statusCode;
    }
}