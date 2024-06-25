<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            ['nom' => 'DERMANE', 'prenom' => 'fad', 'username' => 'dermanefad', 'role' => 'client', 'contact' => '90909090', 'password' => Hash::make('password')],
            ['nom' => 'SOKA', 'prenom' => 'disima', 'username' => 'sokadisima', 'role' => 'client', 'contact' => '90909091', 'password' => Hash::make('password')],
            ['nom' => 'Beveri', 'prenom' => 'Farida', 'username' => 'beverifarida', 'role' => 'client', 'contact' => '90909092', 'password' => Hash::make('password')],
            ['nom' => 'Sankara', 'prenom' => 'Sarata', 'username' => 'sankarasarata', 'role' => 'client', 'contact' => '90909093', 'password' => Hash::make('password')],
            ['nom' => 'Esso', 'prenom' => 'Daniel', 'username' => 'essodaniel', 'role' => 'client', 'contact' => '90909094', 'password' => Hash::make('password')],
            ['nom' => 'Degbebia', 'prenom' => 'Aimane', 'username' => 'degbebiaaimane', 'role' => 'client', 'contact' => '90909095', 'password' => Hash::make('password')],
            ['nom' => 'TOYI', 'prenom' => 'Franciose', 'username' => 'toyifranciose', 'role' => 'client', 'contact' => '90909096', 'password' => Hash::make('password')],
            ['nom' => 'DERMANE', 'prenom' => 'fad', 'username' => 'dermanefad1', 'role' => 'client', 'contact' => '90909097', 'password' => Hash::make('password')],
            ['nom' => 'SOKA', 'prenom' => 'disima', 'username' => 'sokadisima1', 'role' => 'client', 'contact' => '90909098', 'password' => Hash::make('password')],
            ['nom' => 'Beveri', 'prenom' => 'Farida', 'username' => 'beverifarida1', 'role' => 'client', 'contact' => '90909099', 'password' => Hash::make('password')],
            ['nom' => 'Sankara', 'prenom' => 'Sarata', 'username' => 'sankarasarata1', 'role' => 'client', 'contact' => '90909100', 'password' => Hash::make('password')],
            ['nom' => 'Esso', 'prenom' => 'Daniel', 'username' => 'essodaniel1', 'role' => 'client', 'contact' => '90909101', 'password' => Hash::make('password')],
            ['nom' => 'Degbebia', 'prenom' => 'Aimane', 'username' => 'degbebiaaimane1', 'role' => 'client', 'contact' => '90909102', 'password' => Hash::make('password')],
            ['nom' => 'TOYI', 'prenom' => 'Franciose', 'username' => 'toyifranciose1', 'role' => 'client', 'contact' => '90909103', 'password' => Hash::make('password')],
            ['nom' => 'DERMANE', 'prenom' => 'fad', 'username' => 'dermanefad2', 'role' => 'client', 'contact' => '90909104', 'password' => Hash::make('password')],
            ['nom' => 'SOKA', 'prenom' => 'disima', 'username' => 'sokadisima2', 'role' => 'client', 'contact' => '90909105', 'password' => Hash::make('password')],
            ['nom' => 'Beveri', 'prenom' => 'Farida', 'username' => 'beverifarida2', 'role' => 'client', 'contact' => '90909106', 'password' => Hash::make('password')],
            ['nom' => 'Sankara', 'prenom' => 'Sarata', 'username' => 'sankarasarata2', 'role' => 'client', 'contact' => '90909107', 'password' => Hash::make('password')],
            ['nom' => 'Esso', 'prenom' => 'Daniel', 'username' => 'essodaniel2', 'role' => 'client', 'contact' => '90909108', 'password' => Hash::make('password')],
            ['nom' => 'Degbebia', 'prenom' => 'Aimane', 'username' => 'degbebiaaimane2', 'role' => 'client', 'contact' => '90909109', 'password' => Hash::make('password')],
            ['nom' => 'TOYI', 'prenom' => 'Franciose', 'username' => 'toyifranciose2', 'role' => 'client', 'contact' => '90909110', 'password' => Hash::make('password')],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
