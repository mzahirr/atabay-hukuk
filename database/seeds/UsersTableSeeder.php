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
        \App\User::create([
            'name' => 'Halil Coşdu',
            'username' => 'halilcosdu',
            'email' => 'halilcosdu@gmail.com',
            'password' => 123456
        ]);

    }
}
