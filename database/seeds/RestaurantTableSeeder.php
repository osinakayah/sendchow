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
        for($i = 0; $i <= 4; $i++){
            \DB::table('restaurants')->insert([
                'status'        => true,
                'user_id'       => $faker->numberBetween(1, 5),
                'region_id'     => $faker->numberBetween(1, 5),
                'latitude'      =>$faker->latitude,
                'longitude'     => $faker->longitude,
                'address'       => $faker->address,
                'title'         => $faker->title,
                'phone'         => $faker->phoneNumber,
                'email'         => $faker->email,
                'website'       => $faker->url,
                'rating'        => $faker->numberBetween(1, 5),
                'description'  => $faker->text,
                'is_featured'     => $faker->numberBetween(0, 1),

            ]);
        }
    }
}
