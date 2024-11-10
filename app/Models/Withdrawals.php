<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawals extends Model
{
    use HasFactory; 
    protected $table='withdrawals';
    protected $fillable = [
        'vendor_id',
        'amount',
        'status',
    ];
}
