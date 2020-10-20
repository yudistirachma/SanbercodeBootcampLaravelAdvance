<?php

namespace App\Http\Controllers;

use App\Chat;
use App\Events\ChatStoredEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function allChats()
    {
        return Chat::with('user')->orderBy('created_at', 'desc')->get();
    }
    public function store(Request $request)
    {
        $chat = Chat::create([
            "subject" => $request->subject,
            "user_id" => auth()->user()->id
        ]);

        broadcast(new ChatStoredEvent($chat))->toOthers();

        return $chat;
    }
}
