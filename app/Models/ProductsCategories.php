<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsCategories extends Model
{
    use HasFactory;
    protected $table='products_categories';
    protected $fillable = [
        'product_id',
        'category_id',
        'sub_category_id',
        'sub_sub_category_id',
    ];

    public function products(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
    public function categories(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
