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

    public function edit(Pizza $pizza): Response
    {
        return Inertia::render('Pizza/Edit', [
            'pizza' => $pizza
        ]);
    }

    public function update(Request $request, Pizza $pizza): void
    {
        $pizza->update([
            'status' => $request->status
        ]);
    }

    public function show(Pizza $pizza): Response
    {
        return Inertia::render('Pizza/Show', [
            'pizza' => $pizza
        ]);
    }
}
