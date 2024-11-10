<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Role extends Model
{
    protected $table='roles';
    public $fillable = ['name','name_en','role_type'];

    public function permissions(){
        return $this->hasMany(RolePermission::class,'role_id','id');
    }

    public function users(){
        return $this->hasMany(User::class,'role_id','id');
    }

    public function roles_admin()
    {
        return $this -> hasMany(User::class,'role_id','id')
        ->where('id','<>',Auth::id());
    }

    public function roles_vendors()
    {
        return $this -> hasMany(User::class,'role_id','id')
        ->where('id','<>',Auth::id());

    }

}
