<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\kamar;

class KamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        kamar::factory(10)->create();
    }
}
