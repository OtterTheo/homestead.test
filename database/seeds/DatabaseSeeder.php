<?php

use App\Entreprise;
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
//        $this->call(EntrepriseTableSeeder::class);
        Entreprise::create(
            [
                'name' => 'Ma super Entreprise',
                'name' => 'Ma méga Entreprise'
            ]
        );
    }
}
