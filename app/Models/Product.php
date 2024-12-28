<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getImageAttribute()
    {
        if ($this->attributes['image'] == 'default.jpg') {
            return asset('default.jpg');
        }
        if ($this->attributes['image'] !== null) {
            return URL('storage/products/images') . '/' . $this->attributes['image'];
        }
        return null;
    }

    public function cartItems()
    {
        return $this->belongsToMany(Cart::class, 'cart_items', 'product_id', 'cart_id')->withPivot('quantity');
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class , 'order_items', 'product_id', 'order_id')->withPivot('quantity');
    }
}
