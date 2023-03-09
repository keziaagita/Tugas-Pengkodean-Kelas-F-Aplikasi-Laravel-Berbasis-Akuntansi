<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Barang;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Barang::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['name' => 'Zinc', 'stok' => '150', 'harga' => '500'],
            ['name' => 'Lifeboy', 'stok' => '150', 'harga' => '1000'],
            ['name' => 'Ciptadent', 'stok' => '150', 'harga' => '3500'],
            ['name' => 'Pepsodent', 'stok' => '150', 'harga' => '4000'],
            ['name' => 'Rinso', 'stok' => '150', 'harga' => '5000'],
            ['name' => 'Daia', 'stok' => '150', 'harga' => '5000'],
            ['name' => 'Mama Lemon', 'stok' => '150', 'harga' => '2000'],
            ['name' => 'Nuvo', 'stok' => '150', 'harga' => '3000'],

        ];
        foreach($data as $item){
            //Singe Insert
            Barang::insert([
                'name' => $item['name'],
                'stok' => $item['stok'],
                'harga' => $item['harga'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()	
            ]);
        }
    
    }
}
