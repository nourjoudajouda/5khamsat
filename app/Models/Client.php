<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table='users';
    protected $fillable = [
        'name',
        'email',
        'photo',
        'mobile',
        'password',
        'type',
        'status',
    ];

 
}
