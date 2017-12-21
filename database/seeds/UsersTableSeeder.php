<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $faker = Factory::create();

          $password = Hash::make('admin123');

        for($i=0;$i<10;$i++){

        	User::create([
        		'username' => $faker->name,
        		'email' =>$faker->email,
        		'fname' => $faker->firstName,
        		'lname' => $faker->lastName,
        		'password' =>$password,


        		]);

        }
       
    }
}
