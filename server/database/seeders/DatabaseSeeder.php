<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Product::factory(15)->create();
        Category::factory(5)->create();


        // ambil semua kategori
        $kategori = Category::all();

        // untuk mendapatkan categori setiap product
        Product::all()->each(function($product) use ($kategori) {
            $product->kategori()->attach(
                $kategori->random(2)->pluck('id')->toArray()
            );
        });

    }
}
