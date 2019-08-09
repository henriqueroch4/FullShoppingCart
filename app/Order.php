<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'status', 'payment_options'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);    
    }
}
