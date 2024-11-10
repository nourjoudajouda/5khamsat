<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Auth;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'photo',
        'mobile',
        'type',
        'status',
        'vendor_id',
        'role_id',
        'logo',
        'icon',
        'password',
        'DOB',
        'rate',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function role(){
        return $this->belongsTo(Role::class);
    }
    public function vendors(){
        return $this->hasMany(Vendor::class,'vendor_id','id');
    }
    
    public function chats(){
        return $this->hasMany(Chat::class,'sender_id','id');
    }

    public function orders(){
        return $this->hasMany(Order::class,'user_id','id')
        ->whereIn('status', [1,2]);
    }
}
