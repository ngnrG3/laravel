<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettlementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settlements')->insert(
            [
                'key' => 3671,
                'name' => 'México Insurgente',
                'zone_type' => 'Urbano',
                'municipality_id' => 1,
                'zip_code_id' => 1
            ],
            
        );
        DB::table('settlements')->insert(
            [
                'key' => 3672,
                'name' => 'México Revolucionario',
                'zone_type' => 'Urbano',
                'municipality_id' => 1,
                'zip_code_id' => 1
            ]
        );
    }
}
