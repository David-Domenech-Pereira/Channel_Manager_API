<?php

namespace PMApi\Request\Availability;

use App\Entity\Provider\MealPlan;

class ProviderLiveAvailabilityRequestDTO
{
    private  \DateTime $checkIn;
    private \DateTime $checkOut;
    private int $mealPlan;
    private int $rooms;
    private int $adults;
    private int $children;
    /**
     * @var array $hotelCodes Array of provider hotel codes, just one to search for availability in a single hotel
     */
    private array $hotelCodes = [];
    /**
     * @var array $roomCodes Array of provider room codes, just one to search for availability in a single room
     */
    private array $roomCodes = [];

    public function getCheckIn(): \DateTime
    {
        return $this->checkIn;
    }

    public function setCheckIn(\DateTime $checkIn): void
    {
        $this->checkIn = $checkIn;
    }

    public function getCheckOut(): \DateTime
    {
        return $this->checkOut;
    }

    public function setCheckOut(\DateTime $checkOut): void
    {
        $this->checkOut = $checkOut;
    }

    public function getMealPlan(): int
    {
        return $this->mealPlan;
    }

    public function setMealPlan(int $mealPlan): void
    {
        $this->mealPlan = $mealPlan;
    }

    public function getRooms(): int
    {
        return $this->rooms;
    }

    public function setRooms(int $rooms): void
    {
        $this->rooms = $rooms;
    }

    public function getAdults(): int
    {
        return $this->adults;
    }

    public function setAdults(int $adults): void
    {
        $this->adults = $adults;
    }

    public function getChildren(): int
    {
        return $this->children;
    }

    public function setChildren(int $children): void
    {
        $this->children = $children;
    }

    public function getHotelCodes(): array
    {
        return $this->hotelCodes;
    }

    public function setHotelCodes(array $hotelCodes): void
    {
        $this->hotelCodes = $hotelCodes;
    }

    public function getRoomCodes(): array
    {
        return $this->roomCodes;
    }

    public function setRoomCodes(array $roomCodes): void
    {
        $this->roomCodes = $roomCodes;
    }
}