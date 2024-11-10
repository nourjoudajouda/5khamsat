<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $table='stores';
    protected $fillable = [
        'length',
        'height',
        'width',
        'area',
        'spent_space',
        'address',
        'location_lat',
        'location_long',
        'user_id',
        'company_name',
        'count',
        'square_meter_price',
    ];
    public function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
