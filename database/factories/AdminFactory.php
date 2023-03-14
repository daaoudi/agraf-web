<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'telephone'=>'0661577372',
            'is_admin'=>1,
            'email_verified_at' => now(),
            'password' => Hash::make('admin'), // password
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'two_factor_confirmed_at'=>null,
            'remember_token' => Str::random(10),
            'current_team_id' => null,
            'profile_photo_path' => null,
            
            
        ];
    }
}
