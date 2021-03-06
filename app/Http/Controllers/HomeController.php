<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Connectors\GotConnector as Got;
use App\Http\Connectors\GhibliConnector as Ghi;
use App\Http\Connectors\Song as Song;
use App\Option as Option;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // toutes les methodes de cette class necessite d'être co
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Appel de ma function getCharacter qui ce trouve dans GotConnector
        // $got = new Got;
        // $response = $got->getCharacter();
        // $ghi = new Ghi;
        // $response = $ghi->getGhilFilm();
        
        // return view('home', [
        //     "data" => $response,
        // ]);
        $options = Option::all();
        $song = new Song();
        $tabs = $song->getSong();
        $style = Option::where('value', 'nightmode')->first()->content;
        return view('home', [
        "data" => $tabs,
        "options" => $options,
        "style" => $style,
      ]);
    }
}
