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
}