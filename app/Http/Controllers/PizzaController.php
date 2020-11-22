<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $pizzas = [
            ['type' => 'hawaiian', 'base' => 'cheesycrust'],
            ['type' => 'volcano', 'base' => 'garliccrust'],
            ['type' => 'veg surprise', 'base' => 'thin and crispy']
        ];
    
        return view('pizzas',[
            'pizzas' => $pizzas,
            ]);
    }
    public function show($id){
        return view('details', ['id' => $id]);
    }
}
