<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    // branch
    public function branch(){
        return $this->belongsTo(ContactUs::class, 'branch_id', 'id');
    }
}
