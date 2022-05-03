<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


use App\Models\Program;
use App\Models\ProgramCategory;

class ProgramCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProgramCategory::create([
           'program_id' => '6867ab85-c131-11ec-b3a7-0242ac120003',
            'category_name'=>'Rage game',
        ]);
        ProgramCategory::create([
            'program_id' => '6867ab85-c131-11ec-b3a7-0242ac120003',
             'category_name'=>'Harcos',
        ]);
    }
}
