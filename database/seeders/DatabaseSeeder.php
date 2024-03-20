<?php

namespace Database\Seeders;

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
            'pn' => 200711134,
            'role' => 'Admin',
            'name' => 'M. Seprinaldi',
            'email' => 'naldi@gmail.com',
            'join_date' => '2024-03-09 04:37:48',
            'password' => bcrypt('123456'),
        ]);
        // User::create([
        //     'id_asisten' => 2007111442,
        //     'role' => 'Staff',
        //     'nama' => 'Maman',
        //     'email' => 'maman@gmail.com',
        //     'join_date' => '2024-03-09 04:37:48',
        //     // 'jabatan' => 'Staff',
        //     'password' => bcrypt('123456'),
        // ]);
        
    }
}
