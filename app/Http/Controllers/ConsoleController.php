<?php

namespace App\Http\Controllers;

use App\Console;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Input;

class ConsoleController extends Controller {
  public function save_image($input, $column, $object) {
    $file = Input::file($input);
    $destination_path = '../img/';
    $file_name = $file->getClientOriginalName();
    $file = $file->move($destination_path, $file_name);
    $object->$column = $destination_path . $file_name;

    $object->save();
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create() {
    // $companies = Company::pluck(['id', 'name'])->toArray();
    $companies = DB::table('companies')->get();
    return view('consoles.create', ['companies'=>$companies]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request) {
    $console = new Console();

    $console->name = Input::get('name');
    $this->save_image('logo', 'logo', $console);
    $this->save_image('console_pic', 'console_pic', $console);
    $this->save_image('jap_pic', 'jap_pic', $console);
    $this->save_image('pal_pic', 'pal_pic', $console);
    $this->save_image('controller_pic', 'controller_pic', $console);
    $console->generation = Input::get('generation');
    $console->medium = Input::get('medium');
    $console->sales = Input::get('sales');
    $console->company_id = Input::get('company');
    $console->company_name = Input::get('company_name');
    $console->start_date = Input::get('start_date');
    $console->end_date = Input::get('end_date');
    $console->history = Input::get('history');
    $console->analysis = Input::get('analysis');

    $console->save();

    return redirect()->route("consoles.create");
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Console  $console
   * @return \Illuminate\Http\Response
   */
  // public function show(Console $console)
  public function show($id) {
    $console = Console::find($id);
    return view('consoles.show', array('console' => $console));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Console  $console
   * @return \Illuminate\Http\Response
   */
  public function edit(Console $console) {
    return view('projects.edit', compact('console'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Console  $console
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Console $console) {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Console  $console
   * @return \Illuminate\Http\Response
   */
  public function destroy(Console $console) {
      //
  }
}
