<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function getProductDetails ($id){
        $backUrl = route('home');
        return "<p>This is product [$id]</p> 
        <a href='$backUrl'>Back</a>";
    }
}
