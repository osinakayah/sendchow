<?php

use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
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
        for($i = 0; $i <= 3; $i++){
            \DB::table('cities')->insert([
                'city'    => $faker->state,
            ]);
        }
    }
}
