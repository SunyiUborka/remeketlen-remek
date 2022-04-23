<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Version;

class VersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Version::create([
             
      
            
            'program_id' => '6867ab85-c131-11ec-b3a7-0242ac120003',
            'user_id'=>'a48f1d3d-c131-11ec-b3a7-0242ac120003',
            'release_date' => '2015.04.04',
            'version_number' => '3.0'
             

       
        ]);

        Version::create([
             
      
            
            'program_id' => '6867ab85-c131-11ec-b3a7-0242ac120003',
            'user_id'=>'a48f1d3d-c131-11ec-b3a7-0242ac120003',
            'release_date' => '2017.04.04',
            'version_number' => '2.0'
             

       
        ]);

    }
}
