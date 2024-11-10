<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WalletAdmin extends Model
{
    use HasFactory;
    protected $table='wallet_admin';
    protected $fillable = [
        'admin_id',
        'currency',
        'icon_currency',
        'balance',
    ];
}