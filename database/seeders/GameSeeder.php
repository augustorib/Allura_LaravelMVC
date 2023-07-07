<?php

namespace Database\Seeders;

use App\Models\Games;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Games::create([
            'Name' => 'Mario Bros',
            'Console' => 'Snes',
            'Year' => '2001'
        ]);

        Games::create([
            'Name' => 'Megaman',
            'Console' => 'Playstation',
            'Year' => '2000'
        ]);


        Games::create([
            'Name' => 'Pokemon Emerald',
            'Console' => 'GBA',
            'Year' => '2002'
        ]);
    }
}
