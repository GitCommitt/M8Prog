<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DumpController extends Controller
{
    function dumpWeb(Request $request){
        dump($request);
        echo "hello";
        
    }

    function dumpDie(Request $request){
        dd($request);
        echo "hello";
    }
}
