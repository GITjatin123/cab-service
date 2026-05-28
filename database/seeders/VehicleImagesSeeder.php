<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vehical_images')->insert([
            [
                'images'=>'https://imgd.aeplcdn.com/1200x900/n/cw/ec/176329/toyota-innova-crysta-left-front-three-quarter0.jpeg?isig=0',
                'vehical_id'=>1
            ],
            [
                'images'=>'https://stimg.cardekho.com/images/carexteriorimages/630x420/Maruti/Dzire/11387/1758802554630/front-left-side-47.jpg?tr=w-320',
                'vehical_id'=>2
            ]
        ]);
    }
}
