<?php

use Illuminate\Database\Seeder;

class RestaurantMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 1; $i <= 1000; $i++){
            \DB::table('menus')->insert([
                'restaurant_id'     => $faker->numberBetween(1, 144),
                'category_id'       => $faker->numberBetween(1, 4),
                'cuisine_id'        => $faker->numberBetween(1, 5),
                'name'              => $faker->lastName.' Fries',
                'image'             => $faker->imageUrl(),
                'price'             => $faker->randomDigitNotNull,
            ]);
        }
    }
}
