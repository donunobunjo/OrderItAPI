<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Customer;

class Order extends Model
{
    protected $fillable = ['orderID','productName','price','quantity','customer_id'];
    
    public function products(){
        return $this->hasMany(Product::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
