<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;

class ProviderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 1; $i < 50; $i ++){
            DB::table('providers')->insert([
                'name' => $faker->name,
                'brand_name' => $faker->company,
                'email' => $faker->company.'@gmail.com',
                'token_key' => $faker->userAgent,
                'tel' => $faker->phoneNumber,
                'status' => random_int(0, 1),
            ]);
        }
        
        DB::table('providers')->insert([
            'name' => "DH BKHN",
            'brand_name' => 'HUT',
            'email' => 'contact@hut.edu.vn',
            'token_key' => $faker->userAgent,
            'tel' => $faker->phoneNumber,
            'status' => 1,
        ]);
    }
}
