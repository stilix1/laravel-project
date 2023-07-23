<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Добавьте поля, которые можно заполнять массово (mass assignable fields)
    protected $fillable = [
        'name',
        'email',
        'password',
        'date_of_birth',
        'role',
        'created_at',
    ];

    // Добавьте скрытые поля (hidden fields), если это необходимо
    protected $hidden = [
        'password',
        'remember_token',
        'email_verified_at',
        'updated_at',
    ];

    // Добавьте другие методы и свойства, если это необходимо
}
