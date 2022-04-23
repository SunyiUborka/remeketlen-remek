<?php

namespace Database\Seeders;

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
        $this->call([
            ProgramCategorySeeder::class,
            ProgramCategoriesSeeder::class,
            RoleSeeder::class,
            CategorySeeder::class,
            ProgramSeeder::class,
            TypeSeeder::class,
            VersionSeeder::class,

        ]);
    }
}
