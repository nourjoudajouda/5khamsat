<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table='countries';
    protected $guarded  = [];

    public function orders(){
        return $this->hasMany(Order::class,'country_id','id')->whereIn('status', [1,2]);
    }
}
