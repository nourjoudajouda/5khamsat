<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table='settings';
    protected $fillable = [
        'name_en',
        'name_ar',
        'description_ar',
        'description_en',
        'address_ar',
        'address_en',
        'email',
        'mobile',
        'value_added_tax',
        'tax',
        'bank_name',
        'transfer_number',
        'iban_number',
    ];
}
