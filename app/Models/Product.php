<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable = [
        'name_ar',
        'name_en',
        'image',
        'vendor_id',
        'rate',
        'status',
        'status_vendor',
        'notes_canceled',
        'activator',
        'description_ar',
        'description_en',
        'duration_received_ar',
        'duration_received_en',
        'start_date',
        'end_date',
        'price',
        'price_offer',
        'qty',
        'code',
        'points',
        'promotion',
        'height',
        'width',
        'length',
        'area',
        'store',
        'warranty_period',
    ];

    public function vendors(){
        return $this->belongsTo(Vendor::class,'vendor_id','id');
    }
    public function orders(){
        return $this->hasMany(OrderDetail::class,'product_id','id')->where('order_id','<>',0);
    }
    public function activators(){
        return $this->hasOne(User::class,'id','activator');
    }
    public function products_category(){
        return $this->hasOne(ProductsCategories::class,'product_id','id');
    }
    public function shipping_details(){
        return $this->hasOne(ShippmentDetails::class,'product_id','id');
    }
}
