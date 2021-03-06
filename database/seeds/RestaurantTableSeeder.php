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
        for($i = 1; $i <= 144; $i++){
            \DB::table('restaurants')->insert([
                'status'        => true,
                'user_id'       => rand(1, 144),
                'region_id'     => rand(1, 5),
                'latitude'      => $faker->latitude,
                'longitude'     => $faker->longitude,
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
