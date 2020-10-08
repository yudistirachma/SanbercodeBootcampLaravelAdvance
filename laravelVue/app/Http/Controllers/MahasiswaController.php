<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Mahasiswa $mahasiswa)
    {
        return response($mahasiswa->get(), 200);     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'string'],
            'jurusan' => ['required', 'string'],
        ]);

        $mahasiswa = Mahasiswa::create($request->only('nama', 'jurusan'));

        return response($mahasiswa, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Mahasiswa $mahasiswa)
    {
        request()->validate([
            'nama' => ['string'],
            'jurusan' => ['string'],
        ]);

        $mahasiswa->update([
            'nama' => request()->input('nama', $mahasiswa->nama),
            'jurusan' => request()->input('jurusan', $mahasiswa->jurusan),
        ]);

        return response($mahasiswa, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswaLama = $mahasiswa;
        $mahasiswa->delete();

        return response("$mahasiswaLama->nama telah di hapus", 200);
        
    }
}
