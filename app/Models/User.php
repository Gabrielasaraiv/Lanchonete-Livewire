<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    const ROLE_CLIENTE = 'cliente';
    const ROLE_FUNCIONARIO = 'funcionario';
    const ROLE_ADMIN = 'admin';

    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function isCliente(){
        return $this->role == self::ROLE_CLIENTE;
    }
    public function isFuncionario(){
        return $this->role == self::ROLE_FUNCIONARIO;
    }
    public function isAdmin(){
        return $this->role == self::ROLE_ADMIN;
    }

    public function cliente(){
        return $this->hasOne(Cliente::class, 'user_id', 'id');
    }

   public function funcionario(){
    return $this->hasOne(Funcionario::class, 'user_id', 'id');
   }

   public function admin(){
    return $this->hasOne(Administrador::class, 'user_id', 'id');
   }
}
