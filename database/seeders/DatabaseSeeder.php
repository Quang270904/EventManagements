<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //  DB::table('roles')->insert([
        //     'role_name' => 'user',
        // ]);

        //   DB::table('users')->insert([
        //     'email' => 'user@gmail.com',
        //     'role_id' =>2,
        //     'password' => Hash::make('quang123'),
        //     'email_verified_at' => now(),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        //   DB::table('user_details')->insert([
        //     'user_id' => '2',
        //     'full_name' =>'kien',
        //     'phone' =>'0332413645',
        //     'address' =>'Ha noi',
        //     'dob' =>'2004-09-27',
        //     'gender' =>'Nam',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        // DB::table('events')->insert([
        //     'user_id' => 22,
        //     'name' => 'Su kien A',
        //     'description' => 'su kien noi bat nhat the gioi',
        //     'start_time' => '2024-12-01 14:30:00',
        //     'end_time' => '2024-12-01 14:30:00',
        //     'location' => 'Ha noi',
        //     'status' => 'pending',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
    }
}
