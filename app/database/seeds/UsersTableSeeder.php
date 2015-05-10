<?php

use Faker\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Fill db with user(s).
     *
     * @return void
     */

    public function run()
    {
        DB::table('users')->delete();

        // $faker = Factory::create();

        // for ($i = 1; $i <= 100; $i++) {
        //     $user = new User();
        //     $user->username = $faker->unique()->userName;
        //     $user->email    = $faker->unique()->email;
        //     $user->password = $faker->password;
        //     $user->save();
        // }

        $user1 = new User();
        $user1->username = 'justind';
        $user1->email    = 'justin.dietert@gmail.com';
        $user1->password = $_ENV['USER_PASS'];
        $user1->save();

    }

}
