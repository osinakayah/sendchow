<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
            \DB::table('users')->insert([
                'first_name'    => $faker->firstName,
                'last_name'    => $faker->lastName,
                'email'         => $faker->email,
                'phone_number'  => $faker->phoneNumber,
                'password'      => bcrypt('secret'),
                'user_type'     => 1,

            ]);
        }
    }
}
