<?php

namespace Database\Factories;
use Faker\Factory as faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaksi>
 */
class TransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = faker::create();
        return [
            'barang_id' => Arr::random([1,2,3,4,5,6,7,8]),
            'kasir_id' => Arr::random([1,2,3,4,5,6,7]),
            'qty' => '2',
            'total' => '5000',
            'created_at' => now(),
        ];
    }
}
