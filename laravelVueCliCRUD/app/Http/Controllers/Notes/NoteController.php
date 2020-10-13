<?php

namespace App\Http\Controllers\Notes;

use App\Http\Controllers\Controller;
use App\Models\{Note, Subject};
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function store()
    {
        $subject = Subject::where('slug', request('subject'))->firstOrFail();
        
        $note = Note::create([
            'subject_id' => $subject->id,
            'title' => request('title'),
            'slug' => \Str::slug(request('title')),
            'description' => request('description')
        ]);

        return response()->json([
            'massage' => 'your notewas created',
            'notes' => $note
        ]);
    }
}
