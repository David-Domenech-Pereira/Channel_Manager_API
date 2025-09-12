<?php

namespace PMApi\Repository\Prices;

use Api\DTO\Response\ResponseCodesDTO;
use GuzzleHttp\Exception\ClientException;
use PMApi\Repository\AbstractPMRepository;
use PMApi\Response\Prices\PricesResponseDTO;

class PMPricesRepository extends AbstractPMRepository
{
    const ENDPOINT = 'api/v1/provider/prices-get/{hotelCode}/{integrationId}';
    public function loadPrices(string $hotelCode, int $integrationId): PricesResponseDTO
    {
        $url = str_replace('{hotelCode}', $hotelCode, self::ENDPOINT);
        $url = str_replace('{integrationId}', (string)$integrationId, $url);

        try{
            $response = $this->sendGetRequest($url);
            return $this->serializer->deserialize($response, PricesResponseDTO::class, 'json');
        } catch (ClientException $e) {
            $pricesResponse = new PricesResponseDTO();
            $pricesResponse->setStatus(ResponseCodesDTO::ERROR_INTERNAL);
            $pricesResponse->setErrorMessage($e->getMessage());
            return $pricesResponse;
        } catch (\Throwable $e) {
            $pricesResponse = new PricesResponseDTO();
            $pricesResponse->setStatus(ResponseCodesDTO::ERROR_INTERNAL);
            $pricesResponse->setErrorMessage($e->getMessage());
            return $pricesResponse;
        }
    }
}