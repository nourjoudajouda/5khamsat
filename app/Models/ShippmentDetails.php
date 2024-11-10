<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippmentDetails extends Model
{
    use HasFactory;
    protected $table='shippment_details';
    protected $fillable = [
        'shippment_id',
        'product_id',
        'user_id',
        'branche_id',
        'store_id',
        'product_qty',
        'total_volume',
        'return_qty',
        'status',
        'noets',
    ];
    public function products(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
    public function vendors(){
        return $this->belongsTo(Vendor::class,'user_id','id');
    }
    public function branches(){
        return $this->belongsTo(Branche::class,'branche_id','id');
    }
    public function stores(){
        return $this->belongsTo(Store::class,'store_id','id');
    }
    
}
