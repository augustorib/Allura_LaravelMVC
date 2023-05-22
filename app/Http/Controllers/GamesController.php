<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GamesController extends Controller
{
    public function create(){
        
        return view('games.create'); 
    }

    public function store(Request $request){

        $gameName = $request->input('gameName');
        $gameConsole = $request->input('gameConsole');
        $gameYear = $request->input('gameYear');

        DB::insert('insert into Games (Name, Console, Year) values (?, ?, ?)', [$gameName, $gameConsole, $gameYear]);

    }
}
