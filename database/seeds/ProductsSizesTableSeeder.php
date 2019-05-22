<?php

use Illuminate\Database\Seeder;

class ProductsSizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\ProductSize::class, 5)->create();
    }
}
