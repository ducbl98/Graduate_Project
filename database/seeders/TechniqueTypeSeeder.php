<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechniqueTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $techniqueTypes =[
            'Language',
            'Framework',
        ];

        foreach ($techniqueTypes as $techniqueType){
            DB::table('technique_types')->insert(['name' => $techniqueType]);
        }
    }
}
