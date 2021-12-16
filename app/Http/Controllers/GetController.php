<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTTP;

class GetController extends Controller
{
    //

    public function list(){
        $Get = Http::get("https://reqres.in/api/users?page=2");
        return view("lists",[
            "lists" => json_decode($Get)
        ]);
    }

    public function detail(){
        $Get = Http::get("https://reqres.in/api/users/2");

        // return view("details",[
        //     "details" => json_decode($Get)
        // ]);
        return $Get;
    }
}
