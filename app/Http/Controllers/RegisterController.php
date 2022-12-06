<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){
        $validatedata = $request->validate([
            'email' => 'required',
            'password' => 'required',
            'username' => 'required',
        ]);
        $validatedata['password'] = bcrypt($validatedata['password']);
        User::create($validatedata);
        return back() -> with('done','RegisterBerhasil');
    }
}
