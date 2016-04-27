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
        DB::table('users')->delete();
        DB::table('users')->insert([
            'name'     => 'An Le Duc',
            'provider_id' => 1,
            'remember_token' => 1,
            'status' => 1,
            'email'    => 'anld@thevip.mobi',
            'password' => Hash::make('123456'),
        ]);
    }
}
