<?php

// app/Http/Controllers/ClientController.php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $users =User::all();
        //dump($users);
        $clients = Client::all();
        return view('clients.index', compact('clients','users'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_users' => 'required|integer|exists:users,id',
            
        ]);

        //obtenir l'utilisateur associé
        $user = User::findOrFail($request->id_users);
        Client::create($request->all());
        return redirect()->route('clients.index');
    }

    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
          'id_users' => 'required|integer|exists:users,id',
        ]);

        $client = Client::findOrFail($id);
        $client->update($request->all());

        return redirect()->route('clients.index');
    }

    public function destroy(Client $client)
    {
        $user->delete();

        return redirect()->route('clients.index');
    }

    
}
