<?php

use Illuminate\Database\Seeder;

class CuisinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cusines = ['Koorean Foods', 'Chinese Food', 'Nigerian Dishes', 'Local Dishes', 'Koshar', 'International', 'French',];

        for($i = 1; $i <= count($cusines); $i++){
            \DB::table('cuisines')->insert([
                'cuisine'    => $cusines[$i-1],
            ]);
        }
    }
}
