<?php

namespace Database\Seeders;

use App\Models\Prestamo;
use Illuminate\Database\Seeder;

class PrestamoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prestamo::factory(1000)->create();
    }
}
