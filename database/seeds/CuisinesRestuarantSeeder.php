<?php

use Illuminate\Database\Seeder;

class CuisinesRestuarantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 144; $i++){
            \DB::table('cuisines_restaurant')->insert([
                'cuisine_id'    => rand(1, 7),
                'restaurant_id'    => rand(1, 144),
            ]);
        }
    }
}
