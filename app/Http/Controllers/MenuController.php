<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        
        $games = ['Mario Bros.', 'Metroid', 'Cadillac & Dinosaurs'];
        

        return view('menu.menu')->with('games', $games);

        // return view('menu.menu', [
        //     'games' => $games

        // ]);

   
        // $html= '';
        // $i = 0; 

        // foreach($games as $game){
        //     $i++;

        //     $html .= "{$i} - {$game} </br>"; 
        // }

     

        // echo $html;


    }
}
