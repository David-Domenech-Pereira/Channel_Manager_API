<?php

namespace Api\DTO\DescriptionDTO;

class DescriptionDTO
{
    public const LANGUAGE_ES = 'es';
    public const LANGUAGE_EN = 'en';
    public const LANGUAGE_DE = 'de';
    public const LANGUAGE_FR = 'fr';
    public const LANGUAGE_IT = 'it';
    public const LANGUAGE_PT = 'pt';
    private string $language;
    private string $text;

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function setLanguage(string $language): void
    {
        $this->language = $language;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function getLanguageLocale(): string
    {
        if ($this->language == self::LANGUAGE_EN){
            return 'US';
        }

        return strtoupper($this->language);
    }
}