<?php namespace Pckg\Pendo\Api\Endpoint;

use Pckg\Api\Endpoint;

/**
 * Class ExchangeRate
 *
 * @package Pckg\Pendo\Api\Endpoint
 */
class AppKey extends Endpoint
{

    /**
     * @var string
     */
    protected $path = 'app-key';

    /**
     * @param array $data
     *
     * @return $this
     */
    public function register($data)
    {
        return $this->postAndDataResponse($data, 'app-key/register', 'appKey')->data();
    }

}