<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $fillable = [
        'name_ar',
        'name_en',
        'image',
        'main_parent',
        'sub_parent',
        'type',
        'persent',
        'min_promotion',
    ];
}
