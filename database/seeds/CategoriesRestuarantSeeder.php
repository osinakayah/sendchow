<?php

use Illuminate\Database\Seeder;

class CategoriesRestuarantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 144; $i++){
            \DB::table('categories_restaurant')->insert([
                'category_id'    => rand(1, 4),
                'restaurant_id'    => rand(1, 144),
            ]);
        }
    }
}
