<?php

use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('options')->insert([
        [
          "value" => "url",
          "content" => "https://www.songsterr.com/a/ra/songs/byartists.json",
        ],
        [
          "value" => "nightmode",
          "content" => "true",
        ]
      ]);
    }
}
