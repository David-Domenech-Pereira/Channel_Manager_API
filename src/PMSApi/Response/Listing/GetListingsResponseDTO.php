<?php

namespace PMSApi\Response\Listing;

use Api\DTO\ListingDTO\ListingDTO;

class GetListingsResponseDTO
{
    private int $responseCode;
    private ?string $errorMessage = null;
    /**
     * @var ListingDTO[]
     */
    private array $listings = [];

    public function getResponseCode(): int
    {
        return $this->responseCode;
    }

    public function setResponseCode(int $responseCode): void
    {
        $this->responseCode = $responseCode;
    }

    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    public function setErrorMessage(?string $errorMessage): void
    {
        $this->errorMessage = $errorMessage;
    }

    public function getListings(): array
    {
        return $this->listings;
    }

    public function setListings(array $listings): void
    {
        $this->listings = $listings;
    }
}