<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CekRole;
use App\pinjam;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PinjamController extends Controller
{
    public function __construct()
    {
        $this->middleware(CekRole::class)->only('update', 'delete', 'index');
    }
    
    public function index(Request $request)
    {

    }

    public function get(Request $request)
    {

    }

    public function delete(Request $request)
    {

    }

    public function update(Request $request)
    {

    }

    public function pinjam(Request $request)
    {
       $pinjam = pinjam::create([
        'nim' => auth()->user()->nim,
        'kode_buku' => request('kode_buku'),
        'tanggal_pinjam' => Carbon::now(),
        'batas_pinjam' => Carbon::now()->addMonthsNoOverflow(1),
        'pengembalian_pinjam' => null,
        'status' => false,
        ]);
    
        return "data stored";
    }
}
