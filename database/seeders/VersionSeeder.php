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
            'role'=>'user'
        ]);

    }
}
