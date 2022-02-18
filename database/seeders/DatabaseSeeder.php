<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => 1,
        ]);

        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('p123'),
            'is_admin' => 0,
        ]);
    }
}
