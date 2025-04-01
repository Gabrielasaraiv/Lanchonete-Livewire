<?php

namespace App\Livewire\Cliente;

use App\Models\Cliente;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Edit extends Component
{
   
    public $clienteId;
    public $name;
    public $email;
    public $password;
    public $endereco;
    public $telefone;
    public $cpf;
    public $user_id;

    public function mount()
    {
        $cliente = Cliente::find(Auth::user()->cliente->id);

       
        $this->clienteId = $cliente->id;
        $this->name = $cliente->user->name;
        $this->email = $cliente->user->email;
        $this->endereco = $cliente->endereco;
        $this->telefone = $cliente->telefone;
        $this->cpf = $cliente->cpf;
    }

    public function salvar()
    {
        $cliente = Cliente::find($this->clienteId);
        $cliente->user->name = $this->name;
        $cliente->user->email = $this->email;
        $cliente->endereco =  $this->endereco;
        $cliente->telefone = $this->telefone;
        $cliente->cpf = $this->cpf;

        $cliente->user->save();
        


        session()->flash('success', 'Aluno atualizado');
    }

    public function render()
    {
        return view('livewire.cliente.edit');
    }
}
