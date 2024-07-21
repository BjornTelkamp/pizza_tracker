<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class PizzaController extends Controller
{
    public function index(Request $request): Response
    {
        $pizzas = Pizza::all();

        return Inertia::render('Pizza/Index', [
            'pizzas' => $pizzas,
        ]);
    }
}
