<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i <= 100; $i++) {
            Train::create([

                'company' => $faker->company(),
                'train_code' => $faker->bothify('??-####'),
                'departure_station' => $faker->city(),
                'arrival_station' =>  $faker->city(),
                'departure_time' => $faker->time(),
                'departure_date' => $faker->date('Y-m-d'),
                'arrival_time' => $faker->time(),
                'arrival_date' => $faker->date('Y-m-d'),
                'number_of_carriages' => rand(1, 25),
                'on_time' => $faker->boolean(),
                'deleted' => $faker->boolean(),

            ]);
        }
    }
}
