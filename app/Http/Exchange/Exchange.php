<?php


namespace App\Http\Exchange;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;


class Exchange
{

    public function getRates()
    {
        $client = new Client(); //GuzzleHttp\Client
        $result = $client->request('GET', 'https://api.privatbank.ua/p24api/pubinfo?exchange&json&coursid=11');

        return $result->getBody();
    }
}