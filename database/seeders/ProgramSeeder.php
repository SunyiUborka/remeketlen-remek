<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        
        Program::create([
            
            'type_id' => '37f2d6ac-c131-11ec-b3a7-0242ac120003',
            'title'=>'Cat Mario',
            'author' => 'bárki',
            'release_date' => '1976-03-04',
            'description' => 'Egy kis Rage'
             

        ]);


        
    }
}
