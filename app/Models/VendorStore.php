<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorStore extends Model
{
    use HasFactory;
    protected $table='vendors_store';
    protected $fillable = [
        'user_id',
        'store_id',
        'width',
        'height',
        'length',
        'arae',
        'spent_space',
        'status',
        'notes',
        'amount_paid',
        'price',
        'invoice',
    ];
    public function vendors(){
        return $this->belongsTo(Vendor::class,'user_id','id');
    }
    public function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function stores(){
        return $this->belongsTo(Store::class,'store_id','id');
    }
    public function branches(){
        return $this->belongsTo(Branche::class,'branche_id','id');
    }
}
