<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imagePath = 'https://images.app.goo.gl/gDoUw8whXgmTZ5Xt8';

        User::create([
            'name' => 'Aman kumar',
            'role' => 'Admin',
            'email' => 'amank6209@gmail.com',
            'password' => bcrypt('Aman123@'),
            'image' => $imagePath,
        ]);
    }
}
