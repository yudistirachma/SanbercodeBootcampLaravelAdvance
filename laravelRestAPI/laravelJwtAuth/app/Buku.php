<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $primaryKey = 'kode_buku';

    protected $fillable = ['judul', 'pengarang', 'tahun_terbit'];
    
    public function pinjam()
    {
        return $this->hasMany(Pinjam::class);
    }

}
