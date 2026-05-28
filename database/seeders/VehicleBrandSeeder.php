<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('vehical_brands')->insert([
          [
              'name'=>'Toyota',
          ],
           [
               'name'=>'Suzuki',
           ],
       ]);
    }
}
