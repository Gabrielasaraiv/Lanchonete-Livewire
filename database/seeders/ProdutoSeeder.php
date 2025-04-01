<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produto::create([
            'nome'=>'X-Baguncinha',
            'ingredientes'=> 'Pão de hambúrguer, 2 hambúguers, 2 salsichas, tomate, alface, batata palha, presunto,
            queijo, milho, cheddar ou catupiry',
            'valor'=> '20'
        ]);
    }
}
