<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WalletStores extends Model
{
    use HasFactory;
    protected $table='wallet_stores';
    protected $fillable = [
        'store_id',
        'currency',
        'icon_currency',
        'balance',
    ];
}
