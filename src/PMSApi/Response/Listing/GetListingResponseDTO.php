<?php

namespace PMSApi\Response\Listing;

use Api\DTO\ListingDTO\ListingDTO;

class GetListingResponseDTO
{
    private int $responseCode;
    private ?string $errorMessage = null;
    private ListingDTO $listing;

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

    public function getListing(): ListingDTO
    {
        return $this->listing;
    }

    public function setListing(ListingDTO $listing): void
    {
        $this->listing = $listing;
    }
}