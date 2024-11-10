<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table='orders_details';
    protected $fillable = [
        'user_id',
        'vendor_id',
        'product_id',
        'quantity',
        'price',
        'total',
        'points', 
        'order_id',
        'end_warranty',

    ];
    protected $appends = ['period_ajax'];

    public function getPeriodAttribute(){
        return Carbon::now()->diffInDays($this->end_warranty);
    }
    public function getPeriodAjaxAttribute(){
        return Carbon::now()->diffInDays($this->end_warranty);
    }

    public function orders(){
        return $this->belongsTo(Order::class,'order_id','id');
    }
    public function products(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
    public function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function vendors(){
        return $this->belongsTo(Vendor::class,'vendor_id','id');
    }
}
