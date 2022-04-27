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
            'user_id' => 'a48f1d3d-c131-11ec-b3a7-0242ac120003',
            'type_name' => 'Játék',
            'name'=>'Mario',
            'developer' => 'Nintendo',
            'release_date' => '1981-6-9',
            'description' => 'Egy kis Rage'
        ]);
    }
}
