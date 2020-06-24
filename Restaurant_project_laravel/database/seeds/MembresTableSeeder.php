<?php

use App\Membres;
use Illuminate\Database\Seeder;

class MembresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Membres::create([
            'prenom' => 'Taïs',
            'nom' => 'Juhel',
            'solde' => '15.0',
            'id_utilisateur' => '2',
            'adresse' => '10 rue Louis Le Nain'
        ]);
    }
}
