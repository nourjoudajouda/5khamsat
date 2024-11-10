<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;
    protected $table='rates';
    protected $fillable = [
        'vendor_id',
        'user_id',
        'product_id',
        'type',
        'rate',
        'review',
    ];
    public function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function vendors(){
        return $this->belongsTo(User::class,'vendor_id','id');
    }
}
