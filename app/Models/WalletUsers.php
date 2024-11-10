<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WalletUsers extends Model
{
    use HasFactory;
    protected $table='wallet_users';
    protected $fillable = [
        'user_id',
        'currency',
        'icon_currency',
        'balance',
    ];
}
