<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WalletVendors extends Model
{
    use HasFactory;
    protected $table='wallet_vendors';
    protected $fillable = [
        'vendor_id',
        'currency',
        'icon_currency',
        'balance',
        'admin_id',
        'notes'
    ];

}
