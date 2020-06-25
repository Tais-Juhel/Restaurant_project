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
            'logo' => 'restau1.png',
            'id_utilisateur' => '3'
        ]);

        Restaurateurs::create([
            'nom' => 'Mcdo',
            'logo' => 'restau2.jpg',
            'id_utilisateur' => '4'
        ]);

        Restaurateurs::create([
            'nom' => 'KFC',
            'logo' => 'restau1.png',
            'id_utilisateur' => '5'
        ]);
        
        Restaurateurs::create([
            'nom' => 'RestoGoGo',
            'logo' => 'restau2.jpg',
            'id_utilisateur' => '6'
        ]);

        Restaurateurs::create([
            'nom' => 'A la maison',
            'logo' => 'restau1.png',
            'id_utilisateur' => '7'
        ]);

        Restaurateurs::create([
            'nom' => 'Le Toubib',
            'logo' => 'restau2.jpg',
            'id_utilisateur' => '8'
        ]);
    }
}
