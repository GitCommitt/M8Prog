<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    private $spaceLanguages;

    public function __construct() 
    {
        $this->spaceLanguages = [
            (object) [
                'name'        => 'AstroAsm',
                'description' => 'Een low-level, quantum-geoptimaliseerde taal speciaal ontworpen voor deep-space sondes. AstroAsm minimaliseert energieverbruik en maximaliseert berekeningen per milliwatt door direct te communiceren met AI-gestuurde boordcomputers tijdens onvoorspelbare stralingsstormen.',
                'iconSvg'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100"><circle cx="50" cy="50" r="45" fill="#0A0F24" stroke="#00FFCC" stroke-width="2"/><path d="M30 70 L50 25 L70 70 M40 55 L60 55" fill="none" stroke="#00FFCC" stroke-width="4" stroke-linecap="round"/><circle cx="50" cy="25" r="4" fill="#FF3366"/></svg>'
            ],
            (object) [
                'name'        => 'NebulaScript',
                'description' => 'Een reactieve, event-driven taal die wordt gebruikt voor de real-time visualisatie en analyse van kosmische data. NebulaScript maakt gebruik van neurale netwerken aan de client-side om patronen in sterrenstof en zwarte gaten te categoriseren voordat de data de aarde bereikt.',
                'iconSvg'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100"><rect width="100" height="100" rx="15" fill="#1A102F"/><path d="M30 30 Q50 70 70 30 T100 50" fill="none" stroke="#9933FF" stroke-width="5" stroke-linecap="round"/><circle cx="50" cy="50" r="8" fill="#FF00FF"/></svg>'
            ],
            (object) [
                'name'        => 'OrbitOS_L',
                'description' => 'Een uiterst veilige, object-georiënteerde taal voor het beheren van de logistiek en levensondersteunende systemen van ruimtekolonies. Dankzij de ingebouwde AI-fault-tolerance kan OrbitOS_L code-fouten zelfstandig herstellen voordat ze kritiek worden voor de bemanning.',
                'iconSvg'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100"><circle cx="50" cy="50" r="40" fill="none" stroke="#FF9900" stroke-width="3" stroke-dasharray="5 5"/><path d="M25 50 A25 25 0 1 0 75 50 A25 25 0 1 0 25 50" fill="none" stroke="#FF5500" stroke-width="4"/><rect x="45" y="45" width="10" height="10" fill="#FFFF00" transform="rotate(45 50 50)"/></svg>'
            ]
        ];
    }

    public function list()
    {
        return view('languages', ["languages" => $this->spaceLanguages, ]);
    }

    public function details($main){
        foreach($this->spaceLanguages as $language){
            if ($language->name === $main) {
                return view('language-details', ["language" => $language]);
            }
        }
    }
}
