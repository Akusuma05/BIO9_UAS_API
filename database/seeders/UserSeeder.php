<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


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
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'username' => 'Admin',
            'role' => 'admin',
            'name' => 'Admin',
            'school' => 'UC',
            'city' => 'Surabaya',
            'birthyear' => 2002,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        // DB::table('users')->insert([
        //     'name' => 'User',
        //     'email' => 'user@gmail.com',
        //     'password' => Hash::make('user123'),
        //     'role' => 'user',
        //     'created_at' => \Carbon\Carbon::now(),
        //     'email_verified_at' => \Carbon\Carbon::now()
        // ]);
    }
}
