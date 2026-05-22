<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    function HotelWeb(Request $request){
        $ipAddress = $request->ip();
        $method = $request->method();
        $useragent = $request->server('HTTP_USER_AGENT');
        return "$ipAddress <br/> $method <br/> $useragent";

    }
}
