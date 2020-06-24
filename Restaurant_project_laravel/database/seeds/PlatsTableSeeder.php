<?php

use App\Plats;
use Illuminate\Database\Seeder;

class PlatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plats::truncate();

        Plats::create([
            'nom' => 'Plat 1',
            'photo' => 'url',
            'prix' => '5.2',
            'note' => '0.0',
            'id_restaurateur' => '1'
        ]);

        Plats::create([
            'nom' => 'Plat 2',
            'photo' => 'url',
            'prix' => '10.12',
            'note' => '0.0',
            'id_restaurateur' => '1'
        ]);

        ///////////////////////////
        
        Plats::create([
            'nom' => 'Plat 1',
            'photo' => 'url',
            'prix' => '5.2',
            'note' => '0.0',
            'id_restaurateur' => '2'
        ]);

        Plats::create([
            'nom' => 'Plat 2',
            'photo' => 'url',
            'prix' => '10.12',
            'note' => '0.0',
            'id_restaurateur' => '2'
        ]);

        ///////////////////////////
        
        Plats::create([
            'nom' => 'Plat 1',
            'photo' => 'url',
            'prix' => '5.2',
            'note' => '0.0',
            'id_restaurateur' => '3'
        ]);

        Plats::create([
            'nom' => 'Plat 2',
            'photo' => 'url',
            'prix' => '10.12',
            'note' => '0.0',
            'id_restaurateur' => '3'
        ]);

        ///////////////////////////
        
        Plats::create([
            'nom' => 'Plat 1',
            'photo' => 'url',
            'prix' => '5.2',
            'note' => '0.0',
            'id_restaurateur' => '4'
        ]);

        Plats::create([
            'nom' => 'Plat 2',
            'photo' => 'url',
            'prix' => '10.12',
            'note' => '0.0',
            'id_restaurateur' => '4'
        ]);

        ///////////////////////////
        
        Plats::create([
            'nom' => 'Plat 1',
            'photo' => 'url',
            'prix' => '5.2',
            'note' => '0.0',
            'id_restaurateur' => '5'
        ]);

        Plats::create([
            'nom' => 'Plat 2',
            'photo' => 'url',
            'prix' => '10.12',
            'note' => '0.0',
            'id_restaurateur' => '5'
        ]);

        ///////////////////////////
        
        Plats::create([
            'nom' => 'Plat 1',
            'photo' => 'url',
            'prix' => '5.2',
            'note' => '0.0',
            'id_restaurateur' => '6'
        ]);

        Plats::create([
            'nom' => 'Plat 2',
            'photo' => 'url',
            'prix' => '10.12',
            'note' => '0.0',
            'id_restaurateur' => '6'
        ]);

        ///////////////////////////
    }
}
