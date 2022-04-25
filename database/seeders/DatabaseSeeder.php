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
            TypeSeeder::class,
            CategorySeeder::class,
            //ProgramCategorySeeder::class,
            //ProgramCategoriesSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            ProgramSeeder::class,
            VersionSeeder::class,
        ]);
    }
}
