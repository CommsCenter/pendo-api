<?php namespace Pckg\Pendo\Api;

use GuzzleHttp\RequestOptions;
use Pckg\Api\Api as PckgApi;
use Pckg\Pendo\Api\Endpoint\App;
use Pckg\Pendo\Api\Endpoint\AppKey;
use Pckg\Pendo\Api\Endpoint\Business;
use Pckg\Pendo\Api\Endpoint\Company;
use Pckg\Pendo\Api\Endpoint\Device;
use Pckg\Pendo\Api\Endpoint\ExchangeRate;
use Pckg\Pendo\Api\Endpoint\Invoice;
use Pckg\Pendo\Api\Endpoint\User;

/**
 * Class Api
 *
 * @package Pckg\Pendo\Api
 */
class Api extends PckgApi
{

    /**
     * Api constructor.
     *
     * @param $endpoint
     * @param $apiKey
     */
    public function __construct(?string $endpoint, ?string $apiKey)
    {
        $this->endpoint = $endpoint;
        $this->apiKey = $apiKey;

        $this->requestOptions = [
            RequestOptions::HEADERS => [
                'X-Pendo-Api-Key' => $this->apiKey,
            ],
            RequestOptions::TIMEOUT => 15,
        ];
    }

    public function setApiKey($apiKey)
    {
        $this->requestOptions[RequestOptions::HEADERS]['X-Pendo-Api-Key'] = $apiKey;
    }

    /**
     * @return Company
     */
    public function company()
    {
        return new Company($this);
    }

    /**
     * @return Business
     */
    public function business()
    {
        return new Business($this);
    }

    /**
     * @return Device
     */
    public function device()
    {
        return new Device($this);
    }

    /**
     * @return Invoice
     */
    public function invoice()
    {
        return new Invoice($this);
    }

    /**
     * @return ExchangeRate
     */
    public function exchangeRate()
    {
        return new ExchangeRate($this);
    }

    /**
     * @return User
     */
    public function user()
    {
        return new User($this);
    }

    /**
     * @return User
     */
    public function app()
    {
        return new App($this);
    }

    /**
     * @return User
     */
    public function appKey()
    {
        return new AppKey($this);
    }

}
