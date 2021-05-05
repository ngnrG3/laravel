<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FederalEntitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('federal_entities')->insert([
            'key' => 15,
            'name' => 'México',
            'code' => 'MEX',
        ]);
    }
}
