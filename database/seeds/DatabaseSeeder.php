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
        $this->call(PsicologiaEduSeeder::class);
        $this->call(LIEEscolarizadoSeeder::class);
        $this->call(LEIPEnLineaSeeder::class);
        $this->call(LIEEnLineaSeeder::class);
        $this->call(MEBSeeder::class);
        $this->call(AdminEducativaSeeder::class);
        $this->call(LEPPMIAyotoxcoSeeder::class);
        $this->call(LEPPMIGPEVictoria::class);
        $this->call(LEPPMIZapotitlan::class);
        $this->call(LEPPMIHueyapan::class);
        $this->call(MEMSSeeder::class);
        $this->call(LIEHueyapanSeeder::class);
        $this->call(MEBEspecializacionSeeder::class);
        $this->call(GroupTeacherSeeder::class);
    }
}
