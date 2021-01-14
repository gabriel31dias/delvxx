<?php

namespace App;
use Illuminate\Support\Facades\Auth;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function scopeCurrentUser($query)
    {
     return $query->where('user_id', Auth::user()->id);
    }
}
