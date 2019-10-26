<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Product::class, 10)->create();

        $products = Product::select('id')->get();

        foreach ($products as $product){
            $product->addMediaFromUrl('https://lorempixel.com/600/450/?18033')->toMediaCollection('products');
        }
    }
}
