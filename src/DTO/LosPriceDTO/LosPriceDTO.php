<?php

namespace Api\DTO\LosPriceDTO;

use Api\DTO\PriceDTO\PriceDTO;

class LosPriceDTO
{
    private \DateTime $date;

    /**
     * @var PriceDTO[]
     */
    private array $prices;

    private int $numberOfGuests;

    public function getDate(): \DateTime
    {
        return $this->date;
    }

    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }

    public function getPrices(): array
    {
        return $this->prices;
    }

    public function setPrices(array $prices): void
    {
        $this->prices = $prices;
    }

    public function getNumberOfGuests(): int
    {
        return $this->numberOfGuests;
    }

    public function setNumberOfGuests(int $numberOfGuests): void
    {
        $this->numberOfGuests = $numberOfGuests;
    }

    public function addPrice(PriceDTO $priceDTO)
    {
        $this->prices[] = $priceDTO;
    }


}