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
            
            'type_id' => '9c10f5b7-c0d7-11ec-a447-0242ac120004',
            'title'=>'Cat Mario',
            'author' => 'bárki',
            'release_date' => '1976-03-04',
            'description' => 'Egy kis Rage'
             

        ]);


        
    }
}
