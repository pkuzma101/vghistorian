<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Support\Facades\Input;

class Company extends Model
{
  protected $table = 'companies';

  public static $rules = array(
    'name' => 'required|max:100',
    'logo' => 'required'
  );

  public function consoles() {
    return $this->hasMany('App\Console');
  }
}
