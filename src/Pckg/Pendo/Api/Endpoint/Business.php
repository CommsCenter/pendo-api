<?php namespace Pckg\Pendo\Api\Endpoint;

use Pckg\Api\Endpoint;

/**
 * Class Company
 *
 * @package Pckg\Pendo\Api\Endpoint
 */
class Business extends Endpoint
{

    /**
     * @var string
     */
    protected $path = 'business';

    /**
     * @param array $data
     *
     * @return $this
     */
    public function register($data = [])
    {
        return $this->postAndDataResponse($data, 'business/register', 'business');
    }

}