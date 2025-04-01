<?php

namespace Database\Seeders;

use App\Models\Funcionario;
use App\Models\Funcionário;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name'=> 'Yan Gabriel',
            'email'=> 'yan@senai.com',
            'password'=>Hash::make('123456'),
            'role'=>'funcionario'
            ]);

            Funcionario::create([
                'cpf'=>'222.222.222-22',
                'user_id'=> $user->id
            ]);
    }
}
