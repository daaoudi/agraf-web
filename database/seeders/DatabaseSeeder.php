<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory(count:1)->create([
             'name' => 'admin',
             'email' => 'admin@gmail.com',
             'is_admin'=>1,
             'telephone'=>'0661577372',
             'password' => Hash::make('admin')
         ]);
    }
}
