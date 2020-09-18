<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $pizzas = Pizza::all();
        return view('menu.index', [
            'pizzas' => $pizzas,
        ]);
    }
}
