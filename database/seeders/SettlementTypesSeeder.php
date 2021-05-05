<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettlementTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settlement_types')->insert([
            'name' => "Colonia",
            'settlement_id' => 1
        ]);

        DB::table('settlement_types')->insert([
            'name' => "Colonia",
            'settlement_id' => 2
        ]);
    }
}
