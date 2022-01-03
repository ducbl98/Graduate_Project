<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Technique;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(ProvinceSeeder::class);
        $this->call(TechniqueTypeSeeder::class);
        $this->call(Technique::class);
        $this->call(Category::class);
    }
}
