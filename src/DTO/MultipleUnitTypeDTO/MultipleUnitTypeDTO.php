<?php

namespace Api\DTO\MultipleUnitTypeDTO;

use Api\DTO\MultipleUnitDTO\MultipleUnitDTO;
use Api\DTO\RoomDTO\RoomDTO;

class MultipleUnitTypeDTO
{
    private int $id;
    private string $name;
    private int $bathrooms;
    private int $surface;

    /**
     * @var RoomDTO[]
     */
    private array $rooms = [];

    /**
     * @var MultipleUnitDTO[]
     */
    private array $multipleUnits = [];

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getBathrooms(): int
    {
        return $this->bathrooms;
    }

    public function setBathrooms(int $bathrooms): void
    {
        $this->bathrooms = $bathrooms;
    }

    public function getSurface(): int
    {
        return $this->surface;
    }

    public function setSurface(int $surface): void
    {
        $this->surface = $surface;
    }

    public function getRooms(): array
    {
        return $this->rooms;
    }

    public function setRooms(array $rooms): void
    {
        $this->rooms = $rooms;
    }

    public function getMultipleUnits(): array
    {
        return $this->multipleUnits;
    }

    public function setMultipleUnits(array $multipleUnits): void
    {
        $this->multipleUnits = $multipleUnits;
    }

    public function addRoom(RoomDTO $roomDTO)
    {
        $this->rooms[] = $roomDTO;
    }

    public function addMultipleUnit(MultipleUnitDTO $multipleUnitDTO)
    {
        $this->multipleUnits[] = $multipleUnitDTO;
    }
}