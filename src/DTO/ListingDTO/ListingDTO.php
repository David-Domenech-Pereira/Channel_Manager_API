<?php

namespace Api\DTO\ListingDTO;

use Api\DTO\AmenityDTO\AmenityDTO;
use Api\DTO\AvailabilityDTO\AvailabilityDTO;
use Api\DTO\DescriptionDTO\DescriptionDTO;
use Api\DTO\ExtraDTO\ExtraDTO;
use Api\DTO\MultipleUnitTypeDTO\MultipleUnitTypeDTO;
use Api\DTO\PhotoDTO\PhotoDTO;
use Api\DTO\PropertyManagerDTO\PropertyManagerDTO;
use Api\DTO\RatePlanDTO\RatePlanDTO;

class ListingDTO
{
    public const ID_PROPERTY_TYPE_APARTMENT = 1;
    public const ID_PROPERTY_TYPE_HOTEL = 2;
    public const ID_PROPERTY_TYPE_BUNGALOW = 3;
    public const ID_PROPERTY_TYPE_CHALET = 4;
    public const ID_PROPERTY_TYPE_HOLIDAY_HOME = 5;
    public const ID_PROPERTY_TYPE_VILLA = 6;
    public const ID_PROPERTY_TYPE_MOBILE_HOME = 7;
    public const ID_PROPERTY_TYPE_TENT = 8;

    public const COUNTRY_ES = 'ES';
    public const COUNTRY_FR = 'FR';
    public const COUNTRY_IT = 'IT';
    public const COUNTRY_DE = 'DE';
    public const COUNTRY_CH = 'CH';
    public const COUNTRY_CZ = 'CZ';
    public const COUNTRY_GB = 'GB';
    public const COUNTRY_PT = 'PT';
    private int $id;
    private string $title;
    private int $propertyType;
    /**
     * @var DescriptionDTO[]
     */
    private array $descriptions;
    private int $capacity;
    /**
     * @var PhotoDTO[]
     */
    private array $photos;
    /**
     * @var RatePlanDTO[]
     */
    private array $ratePlans;
    private string $checkInTimeStart;
    private string $checkInTimeEnd;
    private string $checkOutTimeStart;
    private string $checkOutTimeEnd;
    private string $checkInInstructions;
    private string $checkOutInstructions;
    private string $street;
    private string $city;
    private string $postalCode;
    private string $country;
    private float $latitude;
    private float $longitude;
    private string $legalLicense;
    private string $catastralReference;
    private int $deposit;

    /**
     * @var AmenityDTO[]
     */
    private array $amenities;

    /**
     * @var ExtraDTO[]
     */
    private array $extras = [];

    private PropertyManagerDTO $propertyManager;

    /**
     * @var MultipleUnitTypeDTO[]
     */
    private array $multipleUnitTypes = [];

    /**
     * @var AvailabilityDTO[] Optional, used in pull listings
     */
    private array $availability = [];

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getDescriptions(): array
    {
        return $this->descriptions;
    }

    public function setDescriptions(array $descriptions): void
    {
        $this->descriptions = $descriptions;
    }

    public function getCapacity(): int
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }

    public function getPhotos(): array
    {
        return $this->photos;
    }

    public function setPhotos(array $photos): void
    {
        $this->photos = $photos;
    }

    public function getRatePlans(): array
    {
        return $this->ratePlans;
    }

    public function setRatePlans(array $ratePlans): void
    {
        $this->ratePlans = $ratePlans;
    }

    public function getCheckInTimeStart(): string
    {
        return $this->checkInTimeStart;
    }

    public function setCheckInTimeStart(string $checkInTimeStart): void
    {
        $this->checkInTimeStart = $checkInTimeStart;
    }

    public function getCheckInTimeEnd(): string
    {
        return $this->checkInTimeEnd;
    }

    public function setCheckInTimeEnd(string $checkInTimeEnd): void
    {
        $this->checkInTimeEnd = $checkInTimeEnd;
    }

    public function getCheckOutTimeStart(): string
    {
        return $this->checkOutTimeStart;
    }

    public function setCheckOutTimeStart(string $checkOutTimeStart): void
    {
        $this->checkOutTimeStart = $checkOutTimeStart;
    }

    public function getCheckOutTimeEnd(): string
    {
        return $this->checkOutTimeEnd;
    }

    public function setCheckOutTimeEnd(string $checkOutTimeEnd): void
    {
        $this->checkOutTimeEnd = $checkOutTimeEnd;
    }

    public function addDescription(DescriptionDTO $descriptionDTO)
    {
        $this->descriptions[] = $descriptionDTO;
    }

    public function addPhoto(PhotoDTO $photoDTO)
    {
        $this->photos[] = $photoDTO;
    }

    public function addRatePlan(RatePlanDTO $ratePlanDTO)
    {
        $this->ratePlans[] = $ratePlanDTO;
    }

    public function getPropertyType(): int
    {
        return $this->propertyType;
    }

    public function setPropertyType(int $propertyType): void
    {
        $this->propertyType = $propertyType;
    }

    public function getCheckInInstructions(): string
    {
        return $this->checkInInstructions;
    }

    public function setCheckInInstructions(string $checkInInstructions): void
    {
        $this->checkInInstructions = $checkInInstructions;
    }

    public function getCheckOutInstructions(): string
    {
        return $this->checkOutInstructions;
    }

    public function setCheckOutInstructions(string $checkOutInstructions): void
    {
        $this->checkOutInstructions = $checkOutInstructions;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    public function setPostalCode(string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): void
    {
        $this->latitude = $latitude;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): void
    {
        $this->longitude = $longitude;
    }

    public function getLegalLicense(): string
    {
        return $this->legalLicense;
    }

    public function setLegalLicense(string $legalLicense): void
    {
        $this->legalLicense = $legalLicense;
    }

    public function getDeposit(): int
    {
        return $this->deposit;
    }

    public function setDeposit(int $deposit): void
    {
        $this->deposit = $deposit;
    }

    public function getAmenities(): array
    {
        return $this->amenities;
    }

    public function setAmenities(array $amenities): void
    {
        $this->amenities = $amenities;
    }

    public function getExtras(): array
    {
        return $this->extras;
    }

    public function setExtras(array $extras): void
    {
        $this->extras = $extras;
    }

    public function getPropertyManager(): PropertyManagerDTO
    {
        return $this->propertyManager;
    }

    public function setPropertyManager(PropertyManagerDTO $propertyManager): void
    {
        $this->propertyManager = $propertyManager;
    }

    public function getMultipleUnitTypes(): array
    {
        return $this->multipleUnitTypes;
    }

    public function setMultipleUnitTypes(array $multipleUnitTypes): void
    {
        $this->multipleUnitTypes = $multipleUnitTypes;
    }

    public function addMultipleUnitType(MultipleUnitTypeDTO $multipleUnitTypeDTO)
    {
        $this->multipleUnitTypes[] = $multipleUnitTypeDTO;
    }

    public function addAmenity(AmenityDTO $amenityDto)
    {
        $this->amenities[] = $amenityDto;
    }

    public function setCatastralReference(string $catastralReference): void
    {
        $this->catastralReference = $catastralReference;
    }

    public function getCatastralReference(): string
    {
        return $this->catastralReference;
    }

    public function getAvailability(): array
    {
        return $this->availability;
    }

    public function setAvailability(array $availability): void
    {
        $this->availability = $availability;
    }

    public function getCountryIso3166Alpha3(): string
    {
        // Convert country name to ISO 3166-1 alpha-3 code
        $countryCodes = [
            ListingDTO::COUNTRY_DE => 'DEU',
            ListingDTO::COUNTRY_FR => 'FRA',
            ListingDTO::COUNTRY_IT => 'ITA',
            ListingDTO::COUNTRY_ES => 'ESP',
            ListingDTO::COUNTRY_CH => 'CHE',
            ListingDTO::COUNTRY_CZ => 'CZE',
            ListingDTO::COUNTRY_GB => 'GBR',
            ListingDTO::COUNTRY_PT => 'PRT',
        ];

        if (!in_array(strtoupper($this->country), array_keys($countryCodes))) {
            throw new \InvalidArgumentException(sprintf('"%s" is not supported.', $this->country));
        }

        return $countryCodes[strtoupper($this->country)];
    }
}