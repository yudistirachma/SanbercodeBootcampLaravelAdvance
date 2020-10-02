<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(RegisterRequest $request)
    {
        $user = User::create([
            'nama' => request('nama'),
            'password' => bcrypt(request('password')), 
            'fakultas' => request('fakultas'),
            'jurusan' => request('jurusan'),
            'no_hp' => request('no_hp'),
            'no_wa' => request('no_wa'),
            'role_id' => request('role_id'),
        ]);

        return response('you are regustered');
    }
}
