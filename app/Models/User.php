<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table = 'users';

    public $fillable = [
        'fullname',
        'email',
        'birthdate',
        'bio'
    ];

    protected $casts = [
        'fullname' => 'string',
        'email' => 'string',
        'birthdate' => 'date',
        'bio' => 'string'
    ];

    public static array $rules = [
        'fullname' => 'required:string',
        'email' => 'unique:users',
        'birthdate' => 'required|date',
        'bio' => 'optional'
    ];

    
}
