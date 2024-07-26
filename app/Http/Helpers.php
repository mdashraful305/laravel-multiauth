<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


function routeName($string){
    if(Str::contains($string, '.')){
        $arr = explode('.', $string);
        $route=$arr[1].'-'.str_split($arr[0], strlen($arr[0])-1)[0];
        return $route;
    }
    return $string;
}


