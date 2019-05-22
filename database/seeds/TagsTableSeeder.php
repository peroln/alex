<?php

use Illuminate\Database\Seeder;
use App\Product;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();

        factory(App\Tag::class, 5)->create()->each(function($tag) use ($products){
            $tag->products()->attach(
                $products->random(rand(1,4))->pluck('id')->toArray()
            );
        });
    }
}
