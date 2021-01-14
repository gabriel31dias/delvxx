<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Deliveryman extends Model
{
   protected $table = "deliverymans";

   public function scopeCurrentUser($query){
    return $query->where('user_id', Auth::user()->id);
   }
}
