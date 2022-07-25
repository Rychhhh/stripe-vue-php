<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Order;

class Product extends Model
{
    use HasFactory;


    protected $guarded = []; // bisa di semua field

    public function kategori() // satu product punya banyak category
    {
        return $this->belongsToMany(Category::class);
    }

    public function order() // satu product punya banyak order
    {
        return $this->belongsToMany(Order::class);
    }
}
