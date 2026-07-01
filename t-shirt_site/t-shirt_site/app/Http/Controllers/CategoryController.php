<?php

namespace App\Http\Controllers;

use App\Models\tshirt;
use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
     public function showCategorie($categoryName){
        $category = category::where('name',$categoryName)->firstOrFail();
        $tshirts = tshirt::where('categories_id', $category->id)
                            ->orderBy('colors_id', 'desc')
                            ->get();
        return view('category', ['tshirts' => $tshirts]);
    }
}