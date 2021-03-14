<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //productCategory
    public function productCategory(){
        return $this->belongsTo(ProductCategory::class, 'category_id', 'id');
    }

    //variationCategory
    public function variationCategory(){
        return $this->belongsTo(VariationCategory::class, 'product_id', 'id');
    }
}
