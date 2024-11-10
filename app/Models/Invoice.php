<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table='invoices';
    protected $fillable = [
        'vendor_id',
        'store_id',
        'branche_id',
        'price',
        'admin_id',
        'type',
        'order_id',
        'status',
    ];
    public function stores(){
        return $this->belongsTo(Store::class,'store_id','id');
    }
    public function orders(){
        return $this->belongsTo(Order::class,'order_id','id');
    }
    public function vendor(){
        return $this->belongsTo(Vendor::class,'vendor_id','id');
    }
    public function vendor_income(){
        return $this->belongsTo(Vendor::class,'vendor_id','id')
        ->whereIn('type', ['National_Identity','freelance_work']);

    }
}
