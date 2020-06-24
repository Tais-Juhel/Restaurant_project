<?php

use App\Restaurateurs;
use Illuminate\Database\Seeder;

class RestauTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Restaurateurs::create([
            'nom' => 'SoupoChou',
            'logo' => '#',
            'id_utilisateur' => '4'
        ]);

        Restaurateurs::create([
            'nom' => 'Mcdo',
            'logo' => '#',
            'id_utilisateur' => '5'
        ]);

        Restaurateurs::create([
            'nom' => 'KFC',
            'logo' => '#',
            'id_utilisateur' => '6'
        ]);
        
        Restaurateurs::create([
            'nom' => 'RestoGoGo',
            'logo' => '#',
            'id_utilisateur' => '7'
        ]);

        Restaurateurs::create([
            'nom' => 'A la maison',
            'logo' => '#',
            'id_utilisateur' => '8'
        ]);

        Restaurateurs::create([
            'nom' => 'Le Toubib',
            'logo' => '#',
            'id_utilisateur' => '9'
        ]);
    }
}
