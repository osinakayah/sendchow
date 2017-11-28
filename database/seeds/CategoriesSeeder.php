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

        for($i = 1; $i <= count($categories); $i++){
            \DB::table('categories')->insert([
                'category'    => $categories[$i-1],
            ]);
        }
    }
}
