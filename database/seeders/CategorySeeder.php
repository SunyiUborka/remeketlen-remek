<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'Rage game'
        ]);

        Category::create([
            'name'=>'Pacman'
        ]);

        Category::create([
            'name'=>'Lövöldözős'
        ]);

        Category::create([
            'name'=>'Harcos'
        ]);

        Category::create([
            'name'=>'Oktató'
        ]);

        Category::create([
            'name'=>'Ismeretterjesztő'
        ]);

        Category::create([
            'name'=>'Gyerekprogram'
        ]);

        Category::create([
            'name'=> 'Kutató'
        ]);


    }
}
