<?php

namespace App\Http\Controllers;

class DndController extends Controller
{
    public array $dnd_characters = [
        [
            'Name' => 'Gandalf Stormcrow',
            'Race' => 'Human',
            'Class' => 'Wizard',
            'Level' => 15,
            'Mainstat' => 'Intelligence',
            'Abilities' => ['Fireball', 'Teleportation', 'Arcane Knowledge'],
        ],
        // Second character
        [
            'Name' => 'Drizzt Do\'Urden',
            'Race' => 'Drow',
            'Class' => 'Ranger',
            'Level' => 12,
            'Mainstat' => 'Dexterity',
            'Abilities' => ['Dual Wielding', 'Hunter\'s Mark', 'Shadow Step'],
        ],
        // Third character
        [
            'Name' => 'Aragorn',
            'Race' => 'Human',
            'Class' => 'Ranger',
            'Level' => 10,
            'Mainstat' => 'Strength',
            'Abilities' => ['Sword Mastery', 'Trackless Step', 'Leadership'],
        ],
        // Fourth character
        [
            
            'Name' => 'Elminster Aumar',
            'Race' => 'Human',
            'Class' => 'Wizard',
            'Level' => 20,
            'Mainstat' => 'Intelligence',
            'Abilities' => ['Time Stop', 'Meteor Swarm', 'Shapechange']
        ],
        // Fifth character
        [
            'Name' => 'Bruenor Battlehammer',
            'Race' => 'Dwarf',
            'Class' => 'Fighter',
            'Level' => 18,
            'Mainstat' => 'Constitution',
            'Abilities' => ['Dwarven Resilience', 'Battleaxe Proficiency', 'Tactical Genius'],
        ],
        // Sixth character
        [
            'Name' => 'Larethar Gulgrin',
            'Race' => 'Elf',
            'Class' => 'Rogue',
            'Level' => 10,
            'Mainstat' => 'Dexterity',
            'Abilities' => ['Stealth Mastery', 'Backstab', 'Evasion'],
        ],
        // Seventh character
        [
            'Name' => 'Khelben Arunsun',
            'Race' => 'Human',
            'Class' => 'Wizard',
            'Level' => 17,
            'Mainstat' => 'Intelligence',
            'Abilities' => ['Shadow Weave', 'Forcecage', 'Mordenkainen’s Magnificent Mansion'],
        ],
        // Eighth character
        [
            'Name' => 'Catti-brie',
            'Race' => 'Human',
            'Class' => 'Ranger',
            'Level' => 14,
            'Mainstat' => 'Dexterity',
            'Abilities' => ['Archery Proficiency', 'Favored Enemy: Orcs', 'Spiritual Bond with Drizzt']
        ],
        // Ninth character
        [
            'Name' => 'Raistlin Majere',
            'Race' => 'Human',
            'Class' => 'Sorcerer',
            'Level' => 20,
            'Mainstat' => 'Intelligence',
            'Abilities' => ['Time Reversal', 'Disintegrate', 'Summon Dragon'],
        ],
        // Tenth character
        [
            'Name' => 'Tasslehoff Burrfoot',
            'Race' => 'Kender',
            'Class' => 'Rogue',
            'Level' => 8,
            'Mainstat' => 'Dexterity',
            'Abilities' => ['Pickpocket', 'Sleight of Hand', 'Curiosity'],
        ],
    ];

    public function list($type){
        if ($type  == 'array') {
            return $this->dnd_characters;
        }

        if ($type  == 'json') {
            return response()->json($this->dnd_characters);
        }

        if ($type  == 'collection') {
            return collect($this->dnd_characters);
        }
    }
}
