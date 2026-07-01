<?php

namespace App\Http\Controllers;

use App\Models\tshirt;
use App\Models\color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
   public function showColor($colorName){
        $color = color::where('name',$colorName)->firstOrFail();
        $tshirts = tshirt::where('colors_id', $color->id)->get();
        return view('color', ['tshirts' => $tshirts]);
    }
}
