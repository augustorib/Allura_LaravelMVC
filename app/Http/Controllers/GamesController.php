<?php

namespace App\Http\Controllers;

use App\Models\Games;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GamesController extends Controller
{
    
    public function index(){
        
        $games = Games::all();


        return view('games.index')->with('games', $games);
    }

    public function create(){
        
        return view('games.create'); 
    }

    public function store(Request $request){

        $gameName = $request->input('gameName');
        $gameConsole = $request->input('gameConsole');
        $gameYear = $request->input('gameYear');

        //DB::insert('insert into Games (Name, Console, Year) values (?, ?, ?)', [$gameName, $gameConsole, $gameYear]);

        $games = new Games();

        $games->Name = $gameName;
        $games->Console = $gameConsole;
        $games->Year = $gameYear;
        $games->save();

        return view('games/index');
    }
}
