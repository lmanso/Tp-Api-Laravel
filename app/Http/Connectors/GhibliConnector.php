<?php
// savoir où est mon dossier et si sans namespace impossible de l'utiliser ailleurs
namespace App\Http\Connectors;

// use GuzzleHttp\Exception\GuzzleException;
// use GuzzleHttp\Client;
use App\Http\Connectors\Connector as Connector;

class GhibliConnector extends Connector
{
    public function getGhilFilm(){
        return $this->get('https://ghibliapi.herokuapp.com/films');
    }
}