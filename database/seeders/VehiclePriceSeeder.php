<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiclePriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vehical_prices')->insert([
            [
                'rent_per_km' => 18,
                'rent_per_day' => 2000,

            ],
            [
                'rent_per_km' => 13,
                'rent_per_day' => 1500,

            ],
        ]);
    }
}
