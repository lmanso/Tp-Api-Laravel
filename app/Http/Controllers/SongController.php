<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Connectors\Song as Song;
class SongController extends Controller
{
    public function searchSong(Request $request)
    {
      // Créer un nouvel objet Song et le met dans la variable searchSong
      $searchSong = new Song();
      //Je vais chercher la fonction getSongsByName dans l'objet new Song
      $response = $searchSong->getSongsByName($request->input('search'));
      return view('home', [
        'data' => $response,
      ]);
    }
}
