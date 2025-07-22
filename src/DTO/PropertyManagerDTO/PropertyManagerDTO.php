<?php

namespace Api\DTO\PropertyManagerDTO;

class PropertyManagerDTO
{
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
}