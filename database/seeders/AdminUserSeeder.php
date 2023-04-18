<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        This is a bad idea to commit sensitive data to the git,
//        but this was in a test task
//        better to use tinker for this task
        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@medisonmedia.com', // Use a non-sensitive email address
            'password' => Hash::make('Aa123456'),
        ]);
    }
}
