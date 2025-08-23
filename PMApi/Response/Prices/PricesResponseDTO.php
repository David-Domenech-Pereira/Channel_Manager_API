<?php

namespace PMApi\Response\Prices;

class PricesResponseDTO implements \JsonSerializable
{
    private int $status;
    private string $hotelCode;
    private int $integrationId;
    private ?string $errorMessage = null;
    private array $prices = [];

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    public function getHotelCode(): string
    {
        return $this->hotelCode;
    }

    public function setHotelCode(string $hotelCode): void
    {
        $this->hotelCode = $hotelCode;
    }

    public function getIntegrationId(): int
    {
        return $this->integrationId;
    }

    public function setIntegrationId(int $integrationId): void
    {
        $this->integrationId = $integrationId;
    }

    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    public function setErrorMessage(?string $errorMessage): void
    {
        $this->errorMessage = $errorMessage;
    }

    public function getPrices(): array
    {
        return $this->prices;
    }

    public function setPrices(array $prices): void
    {
        $this->prices = $prices;
    }

    public function jsonSerialize(): array
    {
        return [
            'status' => $this->status,
            'hotelCode' => $this->hotelCode,
            'integrationId' => $this->integrationId,
            'errorMessage' => $this->errorMessage,
            'prices' => $this->prices,
        ];
    }
}