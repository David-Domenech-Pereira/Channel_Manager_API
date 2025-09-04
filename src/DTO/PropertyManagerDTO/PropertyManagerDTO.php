<?php

namespace Api\DTO\PropertyManagerDTO;

class PropertyManagerDTO
{
    public const ID_INTERHOME = 6;
    public const ID_GLOBAL = 4;
    private int $id;
    /**
     * @var string[]
     */
    private array $spokenLanguages = [];

    public function getSpokenLanguages(): array
    {
        return $this->spokenLanguages;
    }

    public function setSpokenLanguages(array $spokenLanguages): void
    {
        $this->spokenLanguages = $spokenLanguages;
    }

    public function addSpokenLanguage(string $language)
    {
        if (!in_array($language, $this->spokenLanguages, true)) {
            $this->spokenLanguages[] = $language;
        }
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
}