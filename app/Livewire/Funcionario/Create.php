<?php

namespace App\Livewire\Funcionario;

use App\Models\Funcionario;
use App\Models\Funcionário;
use App\Models\User;
use Livewire\Component;

class Create extends Component
{

    public $name;
    public $email;
    public $password;
    public $cpf;
   
    
    protected $rules = [

        
       
        'cpf' => 'required|max:15|unique:funcionarios,cpf', // CPF único e válido
       

        // Validação dos campos de usuários (associados ao relacionamento com users)
        'name' => 'required|string|min:5|max:80', // Nome do usuário
        'email' => 'required|email|unique:users,email', // Email do usuário único e válido
        'password'=>'required|string|max:10|min:5'
         
    ];

    public function messages()
    {
        return [
            
    
            'cpf.required'=> 'O CPF é obrigatório.',
            'cpf.unique' => 'O CPF informado já está registrado.',
            'cpf.max'=> 'O CPF deve conter no máximo 15 caracteres.',
            'name.required' => 'O campo nome é obrigatório.',
            'name.max' => 'O campo nome deve conter no máximo 80 caracteres.',
            'name.min' => 'O campo nome deve conter no mínimo 5 caracteres.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'O campo e-mail deve ser um e-mail válido.',
            'email.unique' => 'O e-mail já está registrado.',
            'password.required'=> 'O campo senha é obrigatório',
            'password.max'=> 'O campo senha deve ter no máximo 10 caracteres',
            'password.min'=>'O campo senha deve ter no mínimo 5 caracteres'
        ];
    
    }
    public function render()
    {
        return view('livewire.funcionario.create');
    }

    public function store()
    {
        

        // Valida todos os dados do componente
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'role' => 'funcionario'
        ]);

        Funcionario::create([
            'cpf' => $this->cpf,
            'user_id' => $user->id
        ]);

        
    

        session()->flash('success', 'Cadastro realizado');
    }

   
}
