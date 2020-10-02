<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    protected $primaryKey = 'id_pinjam';

    protected $fillable = ['nim', 'kode_buku', 'tanggal_pinjam', 'batas_pinjam', 'pengembalian_pinjam', 'status'];

    
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function buku(){
        return $this->belongsTo(Buku::class);
    }
}
