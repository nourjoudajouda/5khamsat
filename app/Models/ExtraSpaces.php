<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraSpaces extends Model
{
    use HasFactory;
    protected $table='extra_spaces';
    protected $fillable = [
        'user_id',
        'width',
        'height',
        'length',
        'arae',
        'spent_space',
        'notes',
        'status',
        'store_id',
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
}
