<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vehical_details')->insert([
            [
                'vehicle_name' => 'Innova Crysta',
                'vehicle_type' => 'MPVs',
                'sitting_capacity' => 6,
                'model' => 2020,
                'status'=>'success',
                'brand_id'=>1,
                'price_id'=>1
            ],
            [
                'vehicle_name' => 'Swift Dzire',
                'vehicle_type' => 'sedan',
                'sitting_capacity' => 4,
                'model' => 2020,
                'status'=>'success',
                'brand_id'=>2,
                'price_id'=>2
            ],
        ]);
    }
}
