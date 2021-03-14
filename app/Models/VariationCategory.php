<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariationCategory extends Model
{
    use HasFactory;

    //variations
    public function variations(){
        return $this->belongsTo(Variation::class, 'category_id', 'id');
    }

    //product
    public function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
