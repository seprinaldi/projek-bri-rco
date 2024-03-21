<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Kelas;
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
            'pn' => 2007111334,
            'role' => 'Admin',
            'name' => 'M. Seprinaldi',
            'email' => 'naldi@gmail.com',
            'join_date' => '2024-03-09 04:37:48',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'pn' => 2007111442,
            'role' => 'Staff',
            'name' => 'Maman',
            'email' => 'maman@gmail.com',
            'join_date' => '2024-03-09 04:37:48',
            'password' => bcrypt('123456'),
        ]);
        
    }
}
