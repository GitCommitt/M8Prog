<?php

namespace App\Http\Controllers;
use App\Models\tshirt;

use Illuminate\Http\Request;

class TshirtController extends Controller
{
        public function showTshirt(){
            
        return view('tshirts')
            ->with('tshirts', tshirt::all()
            );
        }

        public function showDetails($id){
            
            $tshirt= tshirt::where('id',$id)->firstOrFail() ;
                        return view ('tshirtDetail', ['tshirt' => $tshirt]);
        }


        public function sortTshirt(){
            
        return view('tshirts')
            ->with('tshirts', tshirt::orderBy('colors_id', 'desc')->get()
            );
        }
}
