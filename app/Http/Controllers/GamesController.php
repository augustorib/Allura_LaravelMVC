<?php

namespace App\Http\Controllers;

use App\Models\Games;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GamesController extends Controller
{
    
    public function index(Request $request){
        
        $games = Games::all();

        $mensagemSucesso = $request->session()->get('mensagem.sucesso');

        return view('games.index')->with('games', $games)->with('mensagemSucesso', $mensagemSucesso);
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


        return redirect('games/index');
    }

    public function destroy(Request $request){

        $gameId = $request->id;

        $game = Games::find($gameId);
        
        $request->session()->flash('mensagem.sucesso', "{$game->Name} removido com sucesso !");

        $game->delete();

        return redirect('/games/index');

    }

    public function edit(Request $request){

        $game = Games::find($request->id);

       //dd($game->Year);
        
        return view('games/edit')->with('game', $game);

    }

    public function update(Request $request){

        $game = Games::find($request->id);

        $game->Name = $request->gameName;
        $game->Console = $request->gameConsole;
        $game->Year    = $request->gameYear;
        $game->save();

        return to_route('games.index')->with('mensagem.sucesso', "Jogo '{$game->Name}' atualizado com sucesso");

    }
}
