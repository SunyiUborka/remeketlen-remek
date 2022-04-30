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
            'name'=>'Die Siedler 2 – Gold Edition',
            'developer' => 'BlueByte',
            'release_date' => '1997-08-11',
            'program_file' => 'program_file/YGruXzsW0f1QIs61QAjqYzRk8FLbM3wZEsQEXiWD.zip',
            'program_image' => 'program_image/rOsCGCSYv1ohfUEZdmNOh1MHqLoSRkvG6jB80Vb0.jpg',
        ]);
        Program::create([
            'id' => '6867ab85-c131-11ec-b3a7-0242ac120004',
            'user_id' => 'a48f1d3d-c131-11ec-b3a7-0242ac120003',
            'type_name' => 'Játék',
            'name'=>'Doom',
            'developer' => 'id softver',
            'release_date' => '1993-6-9',
            'program_file' => 'program_file/YGruXzsW0f1QIs61QAjqYzRk8FLbM3wZEsQEXiWD.zip',
            'program_image' => 'program_image/PWkZInvCac2xhaeTmLHAqX8kj3QGMfD8rdpKXqon.jpg',
            'description' => 'Doom egy 1993 készült fps(first-person shooter) szogtver, amit az id Software készítette MS-DOS-ra'
        ]);
        Program::create([
            'id' => '6867ab85-c131-11ec-b3a7-0242ac120005',
            'user_id' => 'a48f1d3d-c131-11ec-b3a7-0242ac120003',
            'type_name' => 'Játék',
            'name'=>'Oregon Trail Deluxe',
            'developer' => 'MECC',
            'release_date' => '1992-6-9',
            'program_file' => 'program_file/iwsKJqjcUeoUAJPv0juiGSg9k1SMAB27b1alqB88.zip',
            'program_image' => 'program_image/MUgZG6KGf7Ki2f5D811cKfSr1xL0oiWWxxG4qS3z.jpg',
        ]);
    }
}
