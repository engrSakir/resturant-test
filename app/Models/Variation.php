<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    use HasFactory;

    //variationCategory
    public function variationCategory(){
        return $this->belongsTo(VariationCategory::class, 'category_id', 'id');
    }
}
