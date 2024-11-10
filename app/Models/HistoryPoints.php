<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class HistoryPoints extends Model
{
    use HasFactory;
    protected $table='history_points';
    protected $fillable = [
        'vendor_id',
        'amount',
        'image',
        'points',
        'type',
    ];
}
