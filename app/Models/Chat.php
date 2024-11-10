<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Chat extends Model
{
    use HasFactory;
    protected $table='chats';
    protected $fillable = [
        'sender_id',
        'type',
        'message',
        'contact_id',
        'admin_id'
    ];
    protected $appends = ['period'];
    public function getPeriodAttribute(){
        return $this->created_at->diffForHumans(Carbon::now());
    }
    public function vendors(){
        return $this->belongsTo(Vendor::class,'sender_id','id');
    }
    public function users(){
        return $this->belongsTo(User::class,'sender_id','id');
    }
    
}
