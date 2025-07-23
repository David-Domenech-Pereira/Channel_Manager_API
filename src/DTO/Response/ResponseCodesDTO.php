<?php

namespace Api\DTO\Response;

class ResponseCodesDTO
{
    public const FORMAT_XML = 'xml';
    public const FORMAT_HTML = 'html';
    public const FORMAT_JSON = 'json';

    public const STATUS_SUCCESS = 0;
    public const ERROR_PROPERTY_TYPE_NOT_ALLOWED = -1;
    public const ERROR_BED_TYPE_NOT_ALLOWED = -2;
    public const ERROR_INTEGRATION_NOT_FOUND = -3;
    public const ERROR_INTERNAL = -4;
    public const ERROR_DESCRIPTION_NOT_FOUND = -5;
    public const ERROR_NOT_ALLOWED = -6;
    public const ERROR_TOKEN_EXPIRED = -7;
    public const ERROR_NOT_FOUND = -8;
    public const ERROR_LISTING_NOT_FOUND = -9;
    public const ERROR_LISTING_NOT_ACTIVE = -10;
    public const ERROR_NOT_IMPLEMENTED = -11;
    public const ERROR_BAD_REQUEST = -12;
    public const ERROR_NO_PRICES = -13;

    public static function getErrorMessage(int $responseCode)
    {
        switch ($responseCode) {
            case self::STATUS_SUCCESS:
                return 'Success';
            case self::ERROR_PROPERTY_TYPE_NOT_ALLOWED:
                return 'Property type not allowed';
            case self::ERROR_BED_TYPE_NOT_ALLOWED:
                return 'Bed type not allowed';
            case self::ERROR_INTEGRATION_NOT_FOUND:
                return 'Integration not found';
            case self::ERROR_INTERNAL:
                return 'Internal error';
            case self::ERROR_DESCRIPTION_NOT_FOUND:
                return 'Description not found';
            case self::ERROR_NOT_ALLOWED:
                return 'Not allowed';
            case self::ERROR_TOKEN_EXPIRED:
                return 'Token expired';
            case self::ERROR_NOT_FOUND:
                return 'Not found';
            case self::ERROR_LISTING_NOT_FOUND:
                return 'Listing not found';
            case self::ERROR_LISTING_NOT_ACTIVE:
                return 'Listing not active';
            case self::ERROR_NOT_IMPLEMENTED:
                return 'Not implemented';
            case self::ERROR_BAD_REQUEST:
                return 'Bad request';
            case self::ERROR_NO_PRICES:
                return 'No prices available';
            default:
                return 'Unknown error code: ' . $responseCode;
        }
    }
}