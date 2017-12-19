<?php

use Illuminate\Database\Seeder;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 1; $i <= 5; $i++){
            \DB::table('regions')->insert([
                'region'    => $faker->city,
                'city_id'   =>  rand(1, 4),
            ]);
        }
    }
}
