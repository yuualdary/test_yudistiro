<?php

namespace App\Http\Controllers;
use Response;

use Illuminate\Http\Request;

class RandomController extends Controller
{
    //

    public function index(){
        
        $test = GetRandomNumber();
        return response::json($test);
    }

}

