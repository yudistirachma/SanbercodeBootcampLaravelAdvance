<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikle extends Model
{
    protected $fillable = ['user_id', 'title', 'artikle', 'publish'];

    protected $atribute = ['publish' => false];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
