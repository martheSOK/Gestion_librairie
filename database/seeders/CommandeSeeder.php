<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Commande;
use App\Models\Client;

class CommandeSeeder extends Seeder
{
    public function run()
    {
        $clients = Client::all();

        foreach ($clients as $client) {
            Commande::create([
                'montant' => rand(100, 1000),
                'date_commande' => now(),
                'id_clients' => $client->id,
            ]);
        }
    }
}
