<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechniqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('techniques')->insert(['name' => 'PHP','type_id' => 1]);
        DB::table('techniques')->insert(['name' => 'Laravel','type_id' => 2]);
    }
}
