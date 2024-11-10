<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branche extends Model
{
    use HasFactory;
    protected $table='branches';
    protected $fillable = [
        'store_id',
        'name_ar',
        'name_en',
        'address',
        'spent_space',
        'area',
        'width',
        'height',
        'length',
    ];
}
