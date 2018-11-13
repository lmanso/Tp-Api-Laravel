<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Option as Option;

class OptionController extends Controller
{
    public function updateOptions(Request $request)
    {
      $option = Option::find($request->input('url')['id']);
      $option->content = $request->input('url')['value'];
      $option->save();

      // dd($option);
    
      $nightmode = Option::find($request->input('nightmode')['id']);
      if (isset($request->input('nightmode')['value']) === true) {
        $nightmode->content = 'true';
      } else {
        $nightmode->content = 'false';
      }
      $nightmode->content = isset($request->input('nightmode')['value']) ? 'true' : 'false';
      $nightmode->save();
      return redirect('/');
    }
}
