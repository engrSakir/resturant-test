<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;


    //branch
    public function branch(){
        return $this->belongsTo(Branch::class, 'branch_id','id');
    }

    //products
    public function products(){
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}
