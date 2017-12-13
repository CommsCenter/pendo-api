<?php namespace Pckg\Pendo\Api;

use GuzzleHttp\RequestOptions;
use Pckg\Api\Api as PckgApi;
use Pckg\Pendo\Api\Endpoint\Company;
use Pckg\Pendo\Api\Endpoint\Device;
use Pckg\Pendo\Api\Endpoint\Invoice;

class Api extends PckgApi
{

    /**
     * Api constructor.
     *
     * @param $endpoint
     * @param $apiKey
     */
    public function __construct($endpoint, $apiKey)
    {
        $this->endpoint = $endpoint;
        $this->apiKey = $apiKey;

        $this->requestOptions = [
            RequestOptions::HEADERS => [
                'X-Impero-Api-Key' => $this->apiKey,
            ],
            RequestOptions::TIMEOUT => 5,
        ];
    }

    public function company()
    {
        return new Company($this);
    }

    public function device()
    {
        return new Device($this);
    }

    public function invoice()
    {
        return new Invoice($this);
    }

}