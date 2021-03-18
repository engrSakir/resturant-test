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

    //messages
    public function messages(){
        return $this->hasMany(ContactUs::class, 'branch_id', 'id');
    }

    //invoices
    public function invoices(){
        return $this->hasMany(Invoice::class, 'branch_id', 'id');
    }
}
