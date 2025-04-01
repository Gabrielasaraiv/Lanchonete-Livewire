<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Duda Costa',
            'email' => 'duda@senai.com',
            'password' => Hash::make('123456'),
            'role' => 'cliente'
        ]);

        Cliente::create([
            'endereco' => 'Vila Palmira',
            'telefone' => '(18) 98112-2006',
            'cpf' => '123.123.123-12',
            'user_id' => $user->id
        ]);
    }
}
