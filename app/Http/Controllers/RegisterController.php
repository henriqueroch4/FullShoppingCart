<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.create');    
    }
    public function create(Request $request)
    {
        $data=$request->except('_token');
        $data['password']=Hash::make($data['password']);
        $user = User::create($data);
        Auth::login($user);

        return redirect()->route('/');
    }
}