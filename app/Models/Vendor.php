<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    protected $table='vendors';
    protected $fillable = [
        'name',
        'name_store',
        'type',
        'email',
        'password',
        'mobile',
        'country',
        'company_legal_name',
        'what_kind_products',
        'full_address',
        'beneficiay_name',
        'bank_name',
        'branch_name',
        'account_number',
        'iban_number',
        'swift_code',
        'currency',
        'vat_details',
        'status',
        'reason_refuse',
        'activator',
        'disactive',
        'notes',
    ];



    public function users(){
        return $this->hasOne(User::class,'vendor_id','id');
    }
    public function data(){
        return $this->hasOne(VendorDataLegal::class,'vendor_id','id');
    }
    public function activators(){
        return $this->hasOne(User::class,'id','activator');
    }
    public function orders(){
        return $this->hasMany(Order::class,'vendor_id','id');
    }
    public function invoices(){
        return $this->hasMany(Invoice::class,'vendor_id','id')->where('type',2);
    }

    public function sold_orders(){
        return $this->hasMany(Order::class,'vendor_id','id')->whereIn('status',[1,2]);
    }

    public function cancel_orders(){
        return $this->hasMany(Order::class,'vendor_id','id')->where('status',3);
    }

    // public function orders(){
    //     return $this->hasMany(Order::class,'vendor_id','id');
    // }
    
}
