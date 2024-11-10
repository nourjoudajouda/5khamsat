<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table='contacts';
    protected $fillable = [
        'user_id',
        'vendor_id',
    ];
  
    public function vendors(){
        return $this->belongsTo(Vendor::class,'vendor_id','id');
    }
    public function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function chats(){
        return $this->hasMany(Chat::class,'contact_id','id');
    }
}
