<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'              => 'Abdurrahman Ramadhan',
            'email'             => 'abdmandhan@gmail.com',
            'password'          => bcrypt('12341234'),
            'email_verified_at' => now(),
            'remember_token'    => Str::random(10),
        ]);
        $user->assignRole('admin');


        $user = User::create([

            'name'              => 'Khalviza',
            'email'             => 'khalviza@gmail.com',
            'password'          => bcrypt('12341234'),
            'email_verified_at' => now(),
            'remember_token'    => Str::random(10),

        ]);
        $user->assignRole('peneliti');

        $user = User::create([

            'name'              => 'Guest',
            'email'             => 'guest@gmail.com',
            'password'          => bcrypt('12341234'),
            'email_verified_at' => now(),
            'remember_token'    => Str::random(10),

        ]);
        $user->assignRole('guest');
    }
}
