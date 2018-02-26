<?php namespace Pckg\Pendo\Api\Endpoint;

use Pckg\Api\Endpoint;

/**
 * Class Invoice
 *
 * @package Pckg\Pendo\Api\Endpoint
 */
class Invoice extends Endpoint
{

    /**
     * @var string
     */
    protected $path = 'invoice';

    /**
     * @param array $data
     *
     * @return $this
     */
    public function confirm($data = [])
    {
        $response = $this->postAndDataResponse($data, 'invoice/confirm', 'invoice');

        return $response;
    }

}