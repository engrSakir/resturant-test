<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    //productCategories
    public function productCategories(){
        return $this->hasMany(ProductCategory::class, 'branch_id', 'id');
    }
}
