<?php

namespace App\Http\Connectors;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class Connector
{
    protected function get($uri){
        $client = new Client();
        $method = 'GET';

        $res = $client->request($method, $uri);
        $res = $res->getBody()->getContents();
        $res = json_decode($res);
        return $res;
    }
}
