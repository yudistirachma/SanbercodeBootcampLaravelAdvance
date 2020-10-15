<?php

namespace App\Http\Controllers;

use App\Artikle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtikleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Artikle $artikle)
    {
        $artikles = $artikle->get();

        // dd($artikles);
        return view('artikle.index', compact('artikles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artikle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $artikle = request()->validate([
            'title' => 'required|min:3|max:50|unique:artikles|string',
            'artikle' => 'required|min:3|string',
        ]);

        $artikle['user_id'] = Auth::id();

        $store = Artikle::create([$artikle]);
        return redirect('/artikle');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Artikle $artikle)
    {
        return view('artikle.show', compact('artikle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikle $artikle)
    {
        return view('artikle.edit', compact($artikle));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Artikle $artikle)
    {
        $newArtikle = request()->validate([
            'title' => 'required|min:3|max:50|unique:artikles|string',
            'artikle' => 'required|min:3|string',
        ]);

        $artikle->update($newArtikle);

        return redirect('/artikle');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikle $artikle)
    {
        if (auth()->id() != $artikle->user_id) {
            return redirect('/post');
        }

        $artikle->delete();

        return redirect('/artikle');
    }
}
