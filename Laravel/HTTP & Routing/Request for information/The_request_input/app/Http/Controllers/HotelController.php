<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    function HotelWeb(Request $request, $city = null){

    $result = [];

        foreach ($this->data as $hotel) {
            if ($city == null || $hotel['city'] == $city){
                if (!$request->query('min_availability') || $hotel['availability'] >= $request->query('min_availability') ) {
                    $result[] = $hotel;
                }
            }
        }
        return $result;
    }
    
    private array $data = [
        ['city' => 'Amsterdam', 'hotel' => 'Crown Plaza',  'availability' => 5],
        ['city' => 'Amsterdam', 'hotel' => 'Hotel Bliss',  'availability' => 28],
        ['city' => 'Beijing',   'hotel' => 'Sunset Lodge', 'availability' => 35],
        ['city' => 'Beijing',   'hotel' => 'The New View', 'availability' => 6],
        ['city' => 'Chicago',   'hotel' => 'Hotel Elite',  'availability' => 10],
    ];
}