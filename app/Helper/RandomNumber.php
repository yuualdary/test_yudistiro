<?php
use Illuminate\Support\Str;

function GetRandomNumber(){


    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < 4; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    $getUpperInitial=strtoupper($randomString);
    //
    //get rand 4 number
    $fourdigitrandom = mt_rand(1000,9999);
    //
    // initial + rand number
    $data=$getUpperInitial.$fourdigitrandom; 

    return array('response' => true, 'data' => $data);
}