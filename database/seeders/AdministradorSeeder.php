<?php

namespace Database\Seeders;

use App\Models\Administrador;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name'=> 'Gabriela Saraiva',
            'email'=> 'gabriela@senai.com',
            'password'=>Hash::make('123456'),
            'role'=>'admin'
            ]);

            Administrador::create([
                'cpf'=>'155.155.155-15',
                'user_id'=> $user->id
            ]);
    }
}
