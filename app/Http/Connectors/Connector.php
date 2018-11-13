<?php

namespace App\Http\Connectors;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class Connector
{
    protected function get($uri){
    //     $client = new Client();
    //     $method = 'GET';

    //     $res = $client->request($method, $uri);
    //     $res = $res->getBody()->getContents();
    //     $res = json_decode($res);
    //     return $res;
    // }
     try {
      $client = new Client();
      $res = $client->request('GET', $uri);
      return json_decode($res->getBody()->getContents());
    } catch (\Exception $e) {
        //$e stock les erreures
      return abort(500);
    } 

    /*$client = new Client(['http_errors' => false]);
    $res = $client->request('GET', $url);
    $statuscode = $res->getStatusCode();

    if (200 === $statuscode) {
      return json_decode($res->getBody()->getContents());
    }
    elseif (304 === $statuscode) {
      return json_decode($res->getBody()->getContents());
    }
    elseif (404 === $statuscode) {
      return abort(500);
    }
    else {
      return abort(500);
    }*/
  }
}
