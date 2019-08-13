<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Exception\RequestException;

class EntrarController extends Controller
{
    public function index()
    {
        return view('login.index');    
    }

    public function entrar(Request $request)
    {
        if(!Auth::attempt($request->only(['email', 'password']))){
            return redirect()->back()->withErrors(['errors'=>'Usuário ou senha incorretos']);
        }
        return redirect()->route('home');
    }
}
