<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdController extends Controller
{
    public function create(){
        return view('prod.create');
    }

    public function store(Request $request){
        // dd($request->all());
    }
}
