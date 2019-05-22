<?php

use App\Additive;
use App\Product;
use Illuminate\Database\Seeder;

class AdditivesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();

        factory(App\Additive::class, 5)->create();

        Additive::all()->each(function($additive)use($products){
            $additive->products()->attach(
                $products->random(rand(1,3))->pluck('id')->toArray()
            );
        });
    }
}
