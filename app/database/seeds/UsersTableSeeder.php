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

        $faker = Factory::create();

        for ($i = 1; $i <= 100; $i++) {
            $user = User::create([
                'username' => $faker->userName,
                'email' => $faker->email,
                'password' => $faker->password
            ]);
        }

        // $user1 = new User();
        // $user1->username = 'justind';
        // $user1->email    = 'justin.dietert@gmail.com';
        // $user1->password = $_ENV['USER_PASS'];
        // $user1->save();

        // $user2 = new User();
        // $user2->username = 'kenny';
        // $user2->email    = 'kp@email.com';
        // $user2->password = $_ENV['USER_PASS'];
        // $user2->save();
    }
}
