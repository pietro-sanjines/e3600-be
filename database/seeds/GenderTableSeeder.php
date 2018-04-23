<?php

use Illuminate\Database\Seeder;
use App\Gender;

class GenderTableSeeder extends Seeder{
    public function run(){
        Gender::truncate();

        $faker = \Faker\Factory::create();

        for($i = 0; $i <50; $i++){
            Gender::create([
                'genero' => $faker->sentence,
                'descripcion' => $faker->paragraph
            ]);
        }
    }
}
