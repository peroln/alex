<?php

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
        $this->call(ProductsTableSeeder::class);
        $this->call(AdditivesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(ProductsSizesTableSeeder::class);

    }
}
