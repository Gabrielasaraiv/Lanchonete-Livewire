<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class Create extends Component
{
    public $nome;
    public $ingredientes;
    public $valor;
   
    protected $rules = [

        
        
        'nome' => 'required|string|min:5|max:80', 
        'ingredientes' => 'required|string|max:100',
        'valor' => 'required|decimal', 
       
    ];

    public function messages()
    {
        return [
            
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.max' => 'O campo endereço deve conter no máximo 80 caracteres.',
            'nome.min' => 'O campo nome deve conter no mínimo 5 caracteres.',
            'ingredientes.required' => 'O campo ingredientes é obrigatório.',
            'ingredientes.max' => 'O campo ingredientes deve conter no máximo 100 caracteres.',
            'valor.required' => 'O valor é obrigatório.',
            'valor.decimal' => 'O valor deve estar na forma correta.',
        ];
    }
    public function render()
    {
        return view('livewire.produto.create');
    }

    public function store(){

        $this->validate();
        
        $produto = Produto::create([
            'nome'=> $this->nome,
            'ingredientes'=>$this->ingredientes,
            'valor'=>$this->valor
        ]);

        session()->flash('success', 'Cadastro realizado');
    }
}
