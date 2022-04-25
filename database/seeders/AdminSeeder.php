<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'     => 'Administrator',
            'username'    => 'admin',
            'role'    => 'admin',
            'password' => bcrypt('1234'),
        ]);
    
        Admin::create([
            'name'     => 'Resepsionis',
            'username'    => 'resepsionis',
            'role'    => 'resepsionis',
            'password' => bcrypt('1234'),
        ]);
    
        Admin::create([
            'name'     => 'dhioanugrah',
            'username'    => 'dhio',
            'role'    => 'resepsionis',
            'password' => bcrypt('1234'),
        ]);
    }
}
