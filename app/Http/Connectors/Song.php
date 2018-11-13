<?php
  namespace App\Http\Connectors;
  use App\Http\Connectors\Connector as Connector;
  class Song extends Connector
  {
    public function getSong()
    // getSong retourne de base les chansons d'ACDC
    {
      return $this->get('https://www.songsterr.com/a/ra/songs/byartists.json?artists=ACDC');
    }
    public function getSongsByName($search)
    //la variable search ce met suite au début de l'uri
    {
      return $this->get('https://www.songsterr.com/a/ra/songs/byartists.json?artists="' . $search . '"');
    }
  }
