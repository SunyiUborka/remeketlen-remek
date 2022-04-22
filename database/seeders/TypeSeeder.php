<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'id' => '37f2d6ac-c131-11ec-b3a7-0242ac120003',
            'name'=>'Mario'
        ]);

        Type::create([
            'name'=>'Sonic'
        ]);


    }
}
