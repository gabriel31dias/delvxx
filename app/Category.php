<?php

namespace App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categorys';

    public function scopeCurrentUser($query){
     return $query->where('user_id', Auth::user()->id);
    }
}
