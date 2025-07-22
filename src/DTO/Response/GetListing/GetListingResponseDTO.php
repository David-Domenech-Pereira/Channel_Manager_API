<?php

namespace Api\DTO\Response\GetListing;

use Api\DTO\ListingStatusDTO\ListingStatusDTO;

class GetListingResponseDTO
{
    private ?ListingStatusDTO $listingStatus = null;
    private ?string $errorMessage = null;
    private ?int $statusCode = null;

    public function getListingStatus(): ?ListingStatusDTO
    {
        return $this->listingStatus;
    }

    public function setListingStatus(?ListingStatusDTO $listingStatus): void
    {
        $this->listingStatus = $listingStatus;
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