<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(Forms::class);
        $this->call(QuestionSeeder::class);
        $this->call(PedagogiaSeeder::class);
    }
}
