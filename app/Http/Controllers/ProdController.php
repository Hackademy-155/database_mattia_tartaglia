<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class ProdController extends Controller
{
    public function create(){
        return view('game.create');
    }

    public function store(Request $request){
        // dd($request->all());
        $prod=Game::create([
            'title'=>$request->title,
            'publisher'=>$request->publisher,
            'description'=>$request->description,
            'price'=>$request->price
        ]);

        return redirect(route('homepage'))->with(`message`, 'Prodotto inserito correttamente');
    }
}
