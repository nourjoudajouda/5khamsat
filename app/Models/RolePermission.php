<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
    public $timestamps = false;
    public $incrementing = false;

    protected $table='role_permissions';
    public $fillable = ['role_id','permission'];

    public function roles(){
        return $this->belongsTo(Role::class);
    }
}
