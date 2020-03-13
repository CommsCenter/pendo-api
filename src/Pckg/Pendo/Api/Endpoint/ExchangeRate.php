<?php namespace Pckg\Pendo\Api\Endpoint;

use Pckg\Api\Endpoint;

/**
 * Class ExchangeRate
 *
 * @package Pckg\Pendo\Api\Endpoint
 */
class ExchangeRate extends Endpoint
{

    /**
     * @var string
     */
    protected $path = 'exchange-rate';

    /**
     * @param array $data
     *
     * @return $this
     */
    public function getFor($from, $to, $date)
    {
        $params = http_build_query([
            'from' => $from,
            'to' => $to,
            'date' => $date,
        ]);
        $response = $this->getAndDataResponse('exchange-rate?' . $params, 'exchangeRate');

        return $response;
    }

}