<?php
// savoir où est mon dossier et si sans namespace impossible de l'utiliser ailleurs
namespace App\Http\Connectors;

// use GuzzleHttp\Exception\GuzzleException;
// use GuzzleHttp\Client;
use App\Http\Connectors\Connector as Connector;

class GotConnector extends Connector
{
    public function getCharacter(){
        // $this->get('https://anapioficeandfire.com/api/characters/583');
        return $this->get('https://anapioficeandfire.com/api/characters/583');
    }
}