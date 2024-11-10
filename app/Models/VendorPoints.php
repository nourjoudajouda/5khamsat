<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorPoints extends Model
{
    use HasFactory;
    protected $table='vendor_points';
    protected $fillable = [
        'points',
        'vendor_id',
        'points_spent',
        'date_shipping',
    ];

    public function vendors(){
        return $this->belongsTo(Vendor::class,'vendor_id','id');
    }
}
