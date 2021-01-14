<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UtilsController extends Controller
{

    public function getAuthenticated_user(){
       $getuser = Auth::user()->id;
       return response()->json($getuser);
    }



}
