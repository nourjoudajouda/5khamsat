<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $fillable = [
        'user_id',
        'vendor_id',
        'status',
        'final_price',
        'value_added_tax',
        'shipping_cost',
        'system_commission',
        'incomming_tax',
        'invoice_no',
        'country_id',
        'notes',
        'total',
        'vat_payment',
        'commission_payment',
        'points',
        'value_added_tax',
    ];

   

    public function vendors(){
        return $this->belongsTo(Vendor::class,'vendor_id','id');
    }
    public function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function countries(){
        return $this->belongsTo(Country::class,'country_id','id');
    }
    
    public function order_details(){
        return $this->hasMany(OrderDetail::class,'order_id','id');
    }
    public function vats(){
        return $this->hasOne(Invoice::class,'order_id','id');
    }
    
}
