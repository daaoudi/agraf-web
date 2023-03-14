<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\User;
use Database\Factories\AdminFactory;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
       // \App\Models\User::factory(count:1)->create(['is_admin'=>1]);
       /*
       Admin::factory()
       ->count(1)  // create only one admin
       ->create();
        */
    }
}
