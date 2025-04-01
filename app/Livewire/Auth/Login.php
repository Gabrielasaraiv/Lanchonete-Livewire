<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6'
    ];

    protected $messages = [
        'email.required' => 'email obrigatório',
        'email.email' => 'formato de email inválido',
        'password.required' => 'senha obrigatória',
        'password.min' => 'a senha deve conter no mínimo 6 caracteres'
    ];

    //criar a função de login
    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email,
        'password' => $this->password])) { //vai verificar se a tentativa de login foi um sucesso
            session()->regenerate();
            
            if(Auth::user()->role === 'admin'){
                return redirect()->route('admin.dashboard');
            }
    
            if(Auth::user()->role === 'cliente'){
                return redirect()->route('cliente.dashboard');
            }
    
            if(Auth::user()->role === 'funcionario'){
                return redirect()->route('funcionario.dashboard');
            }
            
        }


        session()->flash('error', 'Email ou senha incorretos');//serve para aparecer caso um dos 2 esteja incorretos
        //session controla a sessao do navegador, ja o flash manda uma mensagem na sua view
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
