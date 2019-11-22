<?php

use App\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'studentId' => '0000',
            'name' => 'admin',
            'last_name' => 'admin',
            'password' => bcrypt('buhosevaluation2020'),
            'admin' => 1
         ]);
    }
}
