<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 'a48f1d3d-c131-11ec-b3a7-0242ac120003',
            'username' => 'admin',
            'email' => 'admin@admin.admin',
            'role' => 'admin',
            'password' => '$2y$10$Hq3DW5rpn9QszRsqlpOGTer3RfpX5PnEKkk6NKmerYhp7vrbEqk6y',
        ]);
    }
}
