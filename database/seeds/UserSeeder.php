<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
                        'name' => 'admin',
        				'email' =>'admin@gmail.com',
				        'email_verified_at' => now(),
				        'password' => Hash::make('123456'), // password
				        'remember_token' => Str::random(10)
				    ]);
    }
}
