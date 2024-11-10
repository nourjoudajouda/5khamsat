<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table='users';
    protected $fillable = [
        'name', 'email', 'password','mobile','type','role_id',
    ];
    public function roles()
    {
        return $this -> belongsTo(Role::class,'role_id','id');
    }

    public function roles_admin()
    {
        return $this -> belongsTo(Role::class,'role_id','id')
        ->where('type',1);
    }

    public function roles_vendors()
    {
        return $this -> belongsTo(Role::class,'role_id','id')
        ->where('type',2);

    }


}
