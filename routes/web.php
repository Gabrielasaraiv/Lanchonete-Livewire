<?php

use App\Livewire\Administrador\Create as AdministradorCreate;
use App\Livewire\Auth\Login;
use App\Livewire\Cliente\Create;
use App\Livewire\Cliente\Dashboard\Dashboard;
use App\Livewire\Funcionario\Create as FuncionarioCreate;
use App\Livewire\Produto\Create as ProdutoCreate;
use Illuminate\Support\Facades\Route;

Route::get('cliente/create', Create::class);
Route::get('cliente/dashboard', Dashboard::class)->middleware('auth', 'role:cliente')->name('cliente.dashboard');

Route::get('produto/create', ProdutoCreate::class);

Route::get('funcionario/create', FuncionarioCreate::class);

Route::get('admin/create', AdministradorCreate::class);

Route::get('/login', Login::class)->name('login');