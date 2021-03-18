<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use HasFactory;
    use SoftDeletes;

    //customer
    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

    //branch
    public function branch(){
        return $this->belongsTo(Branch::class, 'branch_id', 'id');
    }

    //staff
    public function staff(){
        return $this->belongsTo(User::class, 'staff_id', 'id');
    }

    //invoiceItems
    public function invoiceItems(){
        return $this->hasMany(InvoiceItem::class, 'invoice_id', 'id');
    }


}
