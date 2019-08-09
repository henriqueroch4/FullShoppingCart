<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function save()
    {
       $user = Auth::user();
       $order = $user->orders;
       $pedido = [
           'status'=>'aguradando',
           'payment_options'=>'credit_card'
       ];
        $save =  $user->orders()->create($pedido);
    dd($user->orders);
    }
}
