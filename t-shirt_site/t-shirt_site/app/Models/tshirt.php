<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tshirt extends Model
{
    use HasFactory;

    protected $fillable = ['text_line_1', 'text_line_2', 'colors_id', 'categories_id'];

    public function color() 
    {
        return $this->belongsTo(\App\Models\color::class, 'colors_id'); 
    }

    public function category() 
    {
        return $this->belongsTo(\App\Models\category::class, 'categories_id'); 
    }
}