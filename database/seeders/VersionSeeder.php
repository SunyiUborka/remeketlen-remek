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
             
      
            
            'program_id' => 'dce6a41f-c0d7-11ec-a447-0242ac120004',
            'user_id'=>'5bc8e45c-c07d-11ec-a447-0242ac120004',
            'release_date' => '2015.04.04',
            'version_number' => '3.0'
             

       
        ]);

        Version::create([
             
      
            
            'program_id' => 'dce6a41f-c0d7-11ec-a447-0242ac120004',
            'user_id'=>'5bc8e45c-c07d-11ec-a447-0242ac120004',
            'release_date' => '2017.04.04',
            'version_number' => '2.0'
             

       
        ]);

    }
}
