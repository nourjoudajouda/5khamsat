<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shippments extends Model
{
    use HasFactory;
    protected $table='shippments';
    protected $fillable = [
        'user_id',
        'store_id',
        'branche_id',
        'status',
        'total_volume',
        'invoice_code',
        'vendor_notes', 
        'store_notes',
    ];

    public function vendors(){
        return $this->belongsTo(Vendor::class,'user_id','id');
    }
    public function stores(){
        return $this->belongsTo(Store::class,'store_id','id');
    }
    public function branches(){
        return $this->belongsTo(Branche::class,'branche_id','id');
    }
    public function details_shippment(){
        return $this->hasMany(ShippmentDetails::class,'shippment_id','id');
    }
   
}
