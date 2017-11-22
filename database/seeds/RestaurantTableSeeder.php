<?php

use Illuminate\Database\Seeder;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        for($i = 0; $i <= 144; $i++){
            \DB::table('restaurants')->insert([
                'status'        => true,
                'user_id'       => rand(1, 144),
                'region_id'     => rand(1, 7),
//                'latitude'      => round($faker->latitude, 7),
//                'longitude'     => round($faker->longitude, 7),
                'latitude'      => round(0, 7),
                'longitude'     => round(0, 7),
                'address'       => $faker->address,
                'title'         => $faker->firstName.' Foods',
                'phone'         => $faker->phoneNumber,
                'email'         => $faker->email,
                'website'       => $faker->url,
                'rating'        => rand(1, 5),
                'description'  => $faker->text,
                'is_featured'     => $faker->numberBetween(0, 1),

            ]);
        }
    }
}
