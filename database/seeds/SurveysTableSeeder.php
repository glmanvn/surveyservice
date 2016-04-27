<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SurveysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('surveys')->delete();
        $faker = Faker::create();
        for($i = 1; $i < 50; $i ++){
            DB::table('surveys')->insert([
                'provider_id' => 1,
                'title' => $faker->name,
                'image' => $faker->imageUrl(120, 120),
                'provider_id' => 1,
                'survey_code' => $faker->postcode,
                'status' => random_int(0, 1),
                'start_date' => $faker->dateTime(),
                'end_date' => $faker->dateTime('now'),
            ]);
        }
    }
}