<?php

// database/seeders/ClientsTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Client;

class ClientsTableSeeder extends Seeder
{
    public function run()
    {
        $users =User::all();
        $users = User::where('role', 'client')->get();

        foreach ($users as $user) {
            Client::create([
                'id_users' => $user->id,
            ]);
        }
    }
}
