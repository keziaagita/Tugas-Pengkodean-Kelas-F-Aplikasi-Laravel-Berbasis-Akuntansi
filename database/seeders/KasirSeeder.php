<?php

namespace Database\Seeders;

use App\Models\Kasir;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KasirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kasir::factory()->count(7)->create();
    }
}
