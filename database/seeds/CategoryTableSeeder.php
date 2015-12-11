<?php

use Illuminate\Database\Seeder;
use CodeDelivery\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class,1000)->create();
    }
}
