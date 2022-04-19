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
            
            'type_id' => '8a45de2f-bfe3-11ec-b117-0242ac1d0004',
            'title'=>'Cat Mario',
            'author' => 'bárki',
            'release_date' => '1976-03-04',
            'description' => 'Egy kis Rage'
             

        ]);


        
    }
}
