<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\tshirt;
use App\Models\color;
use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        
        $baggy = category::create(['name' => 'Baggy']);
        $slim = category::create(['name' => 'Slim']);
        $short = category::create(['name' => 'Short']);

        $red = color::create(['name' => 'Red']);
        $green = color::create(['name' => 'Green']);
        $yellow = color::create(['name' => 'Yellow']);
        $pink = color::create(['name' => 'Pink']);
        $blue = color::create(['name' => 'Blue']);

        tshirt::create([
            'text_line_1' => 'Kippenpoeder', 
            'text_line_2' => 'Uit kippen gemaakt', 
            'categories_id' => $short->id, 
            'colors_id' => $red->id
        ]);
        
        tshirt::create([
            'text_line_1' => 'Chill Modus', 
            'text_line_2' => 'Niet Storen', 
            'categories_id' => $slim->id, 
            'colors_id' => $green->id
        ]);
        
        tshirt::create([
            'text_line_1' => 'Error 404', 
            'text_line_2' => 'Motivatie Niet Gevonden', 
            'categories_id' => $baggy->id, 
            'colors_id' => $yellow->id
        ]);

        tshirt::create([
            'text_line_1' => 'Zon, Zee, Strand', 
            'text_line_2' => 'En Geen Zorgen', 
            'categories_id' => $short->id, 
            'colors_id' => $green->id
        ]);

        tshirt::create([
            'text_line_1' => 'Heel Erg Roze', 
            'text_line_2' => 'En Lekker Strak', 
            'categories_id' => $slim->id, 
            'colors_id' => $pink->id
        ]);

        tshirt::create([
            'text_line_1' => 'Korte Mouwen', 
            'text_line_2' => 'Lange Nachten', 
            'categories_id' => $baggy->id, 
            'colors_id' => $blue->id
        ]);

        // --- Nieuwe T-shirts ---

        tshirt::create([
            'text_line_1' => 'Koffie Eerst',
            'text_line_2' => 'Praten Later',
            'categories_id' => $baggy->id,
            'colors_id' => $blue->id
        ]);

        tshirt::create([
            'text_line_1' => 'It works on my machine',
            'text_line_2' => 'Dus succes ermee',
            'categories_id' => $slim->id,
            'colors_id' => $red->id
        ]);

        tshirt::create([
            'text_line_1' => 'Geen Zin',
            'text_line_2' => 'Is Ook Een Gevoel',
            'categories_id' => $short->id,
            'colors_id' => $pink->id
        ]);

        tshirt::create([
            'text_line_1' => 'Ctrl + Z',
            'text_line_2' => 'Op Mijn Hele Leven',
            'categories_id' => $baggy->id,
            'colors_id' => $yellow->id
        ]);

        tshirt::create([
            'text_line_1' => 'Ik ben niet traag',
            'text_line_2' => 'Ik ben aan het bufferen',
            'categories_id' => $slim->id,
            'colors_id' => $green->id
        ]);

        tshirt::create([
            'text_line_1' => 'Sarcasme',
            'text_line_2' => 'Als een tweede taal',
            'categories_id' => $short->id,
            'colors_id' => $red->id
        ]);

        tshirt::create([
            'text_line_1' => 'Weekend Modus',
            'text_line_2' => 'Nu Al Aan',
            'categories_id' => $baggy->id,
            'colors_id' => $pink->id
        ]);

        tshirt::create([
            'text_line_1' => '10 types of people',
            'text_line_2' => 'Those who know binary and those who don\'t',
            'categories_id' => $slim->id,
            'colors_id' => $blue->id
        ]);

        tshirt::create([
            'text_line_1' => 'Huisje, Boompje',
            'text_line_2' => 'Beestje & Bier',
            'categories_id' => $short->id,
            'colors_id' => $yellow->id
        ]);

        tshirt::create([
            'text_line_1' => 'Ctrl + Alt + Del',
            'text_line_2' => 'En even helemaal opnieuw',
            'categories_id' => $baggy->id,
            'colors_id' => $green->id
        ]);

        tshirt::create([
            'text_line_1' => 'Born to code',
            'text_line_2' => 'Forced to meeting',
            'categories_id' => $slim->id,
            'colors_id' => $red->id
        ]);

        tshirt::create([
            'text_line_1' => 'Doe maar normaal',
            'text_line_2' => 'Dan ben je al baggy genoeg',
            'categories_id' => $baggy->id,
            'colors_id' => $blue->id
        ]);
    }
}
