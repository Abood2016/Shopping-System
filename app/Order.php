<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use\App\User;
use\App\OrderItem;
use\App\Product;
class Order extends Model
{
   
    protected $guarded = [];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function OrderItem()
    {
        return $this->hasMany(OrderItem::class);
    }
        
    public function products()
    {
        return $this->belongsToMany(Product::class,'order_items');
    }
}
