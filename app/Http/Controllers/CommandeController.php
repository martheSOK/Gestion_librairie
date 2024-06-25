<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Client;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function index()
    {
        $commandes = Commande::all();
        return view('commandes.index', compact('commandes'));
    }

    public function create()
    {
        $clients = Client::all();
        return view('commandes.create', compact('clients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'montant' => 'required|string|max:255',
            'date_commande' => 'required|date',
            'id_clients' => 'required|integer|exists:clients,id',
        ]);

        Commande::create($request->all());

        return redirect()->route('commandes.index');
    }

    public function show(Commande $commande)
    {
        return view('commandes.show', compact('commande'));
    }

    public function edit(Commande $commande)
    {
        $clients = Client::all();
        return view('commandes.edit', compact('commande', 'clients'));
    }

    public function update(Request $request, Commande $commande)
    {
        $request->validate([
            'montant' => 'required|string|max:255',
            'date_commande' => 'required|date',
            'id_clients' => 'required|integer|exists:clients,id',
        ]);

        $commande->update($request->all());

        return redirect()->route('commandes.index');
    }

    public function destroy(Commande $commande)
    {
        $commande->delete();

        return redirect()->route('commandes.index');
    }
}
