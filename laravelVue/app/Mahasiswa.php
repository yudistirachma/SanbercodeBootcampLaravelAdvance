<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    
    protected $fillable  = ['nama', 'jurusan'];

    public function getRouteKeyName()
    {
        return 'id';
    }
}
