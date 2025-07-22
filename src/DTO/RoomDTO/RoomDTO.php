<?php

namespace Api\DTO\RoomDTO;

use Api\DTO\BedDTO\BedDTO;

class RoomDTO
{
    public const TYPE_BEDROOM = 'bedroom';
    public const TYPE_BATHROOM = 'bathroom';
    public const TYPE_LIVING_ROOM = 'living_room';
    private string $name;
    private string $type;
    /**
     * @var BedDTO[]
     */
    private array $beds;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getBeds(): array
    {
        return $this->beds;
    }

    public function setBeds(array $beds): void
    {
        $this->beds = $beds;
    }

    public function addBed(BedDTO $bedDTO)
    {
        $this->beds[] = $bedDTO;
    }

}