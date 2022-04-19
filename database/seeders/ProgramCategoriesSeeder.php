<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Program;
use App\Models\Category;

class ProgramCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Program::find(1)->categories()->sync([
            'Rage game' ,
            'harcos'
                 
            ]);

    }
}
