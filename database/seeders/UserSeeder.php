<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Default credentials
        DB::table('users')->truncate();
        \App\Models\User::insert([
            [
                'name' => 'Left4code',
                'email' => 'info@bourbondecoded.com',
                'email_verified_at' => now(),
                'password' => bcrypt('12345678'),
                'gender' => 'male',
                'active' => 1,
                'remember_token' => Str::random(10),
            ],
        ]);

        // Fake users
        User::factory()->times(9)->create();
    }
}
