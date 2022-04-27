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
            'id' => '6867ab85-c131-11ec-b3a7-0242ac120003',
            'type_name' => 'Játék',
            'name'=>'Cat Mario',
            'author' => 'bárki',
            'release_date' => '1976-03-04',
            'description' => 'Egy kis Rage'
        ]);
    }
}
