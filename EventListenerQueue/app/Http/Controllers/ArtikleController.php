<?php

namespace App\Http\Controllers;

use App\Artikle;
use App\Events\ArtiklePublishEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtikleController extends Controller
{
    public function index(Artikle $artikle)
    {
        $artikles = $artikle->get();

        return view('artikle.index', compact('artikles'));
    }

    public function create()
    {
        return view('artikle.create');
    }

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

    public function show(Artikle $artikle)
    {
        // dd(Auth::user()->role);
        return view('artikle.show', compact('artikle'));
    }

    public function edit(Artikle $artikle)
    {
        return view('artikle.edit', compact($artikle));
    }

    public function update(Artikle $artikle)
    {
        $newArtikle = request()->validate([
            'title' => 'required|min:3|max:50|unique:artikles|string',
            'artikle' => 'required|min:3|string',
        ]);

        $artikle->update($newArtikle);

        return redirect('/artikle');
    }

    public function destroy(Artikle $artikle)
    {
        if (auth()->id() != $artikle->user_id) {
            return redirect('/post');
        }

        $artikle->delete();

        return redirect('/artikle');
    }

    public function publish(Artikle $artikle)
    {         
        $artikle->update(["publish" => true]);
      
        event(new ArtiklePublishEvent(request()->user(), $artikle->user->name, $artikle->id));

        return redirect('/artikle');
    }
}
