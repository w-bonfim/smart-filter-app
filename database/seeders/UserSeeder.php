<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@lmfrotas.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('123'),
            ]
        );
    }
}
