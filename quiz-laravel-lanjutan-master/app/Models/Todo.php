<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
  protected $guarded = [];

  public function user(){
    return belongsTo('App\User');
  }
}
