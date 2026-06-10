<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\DndController;

class homeController extends Controller
{
    public function index(){
        $dndController = new DndController();

        $characters = $dndController->dnd_characters;

        return view('home', compact('characters'));
    }
}
