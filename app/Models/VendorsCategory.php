<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorsCategory extends Model
{
    use HasFactory;
    protected $table='vendors_categories';
    protected $fillable = [
        'name_ar',
        'name_en',
        'number_of_orders',
    ];
}
