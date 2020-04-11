<?php namespace Pckg\Pendo\Api\Endpoint;

use Pckg\Api\Endpoint;

/**
 * Class ExchangeRate
 *
 * @package Pckg\Pendo\Api\Endpoint
 */
class User extends Endpoint
{

    /**
     * @var string
     */
    protected $path = 'user';

    /**
     * @param array $data
     *
     * @return $this
     */
    public function register($data)
    {
        return $this->postAndDataResponse($data, 'user/register', 'user')->data();
    }

}