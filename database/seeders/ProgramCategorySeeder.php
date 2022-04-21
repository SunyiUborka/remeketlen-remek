<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


use App\Models\Program;


class ProgramCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Program::find('017ed721-bfe4-11ec-b117-0242ac1d0004')->categories()->sync([
       'category_name' => ['Rage game' , 'harcos'],
        ]);
    }
}
