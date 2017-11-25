<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Fast food', 'Casual Dining', 'Cafe', 'Barbecue',];

        for($i = 1; $i <= 4; $i++){
            \DB::table('categories')->insert([
                'category'    => $categories[rand(0, 3)],
            ]);
        }
    }
}
