<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use App\Models\Topping;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $pizzas = Pizza::all();
        $toppings = Topping::all();
        return view('menu.index', [
            'pizzas' => $pizzas,
            'toppings' => $toppings,
        ]);
    }
}
