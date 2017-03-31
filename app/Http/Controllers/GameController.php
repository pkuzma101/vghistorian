<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Http\Requests;
use DB;
use Input;

class GameController extends Controller {
  public function save_image($input, $column, $object) {
    $file = Input::file($input);
    $destination_path = '/vgh/img/';
    $file_name = $file->getClientOriginalName();
    $file = $file->move($destination_path, $file_name);
    $object->$column = $destination_path . $file_name;

    $object->save();
  }

  public function create() {
    $consoles = DB::table('consoles')->get();
    return view('games.create', ['consoles'=>$consoles]);
  }

  public function show($id) {
    $game = Game::find($id);
    return view('games.show', array('game' => $game));
  }

  public function store(Request $request) {
    $game = new Game();

    $game->name = Input::get('name');
    $game->publisher = Input::get('publisher');
    $game->developer = Input::get('developer');
    $game->console_id = Input::get('console_id');
    $this->save_image('box_art', 'box_art', $game);
    $this->save_image('physical_pic', 'physical_pic', $game);
    $this->save_image('screenshot1', 'screenshot1', $game);
    $this->save_image('screenshot2', 'screenshot2', $game);
    $game->na_release_date = Input::get('na_release_date');
    $game->jap_release_date = Input::get('jap_release_date');
    $game->pal_release_date = Input::get('pal_release_date');
    $game->synopsis = Input::get('synopsis');

    $game->save();

    return redirect()->route("games.create");
  }
}
