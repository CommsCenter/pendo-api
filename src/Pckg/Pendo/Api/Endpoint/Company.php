<?php namespace Pckg\Pendo\Api\Endpoint;

use Pckg\Api\Endpoint;

/**
 * Class Company
 *
 * @package Pckg\Pendo\Api\Endpoint
 */
class Company extends Endpoint
{

    /**
     * @var string
     */
    protected $path = 'company';

    /**
     * @param array $data
     *
     * @return $this
     */
    public function register($data = [])
    {
        return $this->postAndDataResponse($data, 'company/register', 'company')->data();
    }

    public function fetchFiscalizations()
    {
        return $this->getAndDataResponse('fiscalizations', 'fiscalizations');
    }

}