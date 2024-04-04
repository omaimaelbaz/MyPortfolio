<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Jenssegers\Mongodb\Model as Eloquent;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->count(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('123'),
        ]);
    }
}
