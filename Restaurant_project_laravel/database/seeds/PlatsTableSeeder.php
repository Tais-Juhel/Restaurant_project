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
            'photo' => 'plat1.jpg',
            'prix' => '5.2',
            'note' => '5.8',
            'id_restaurateur' => '1'
        ]);

        Plats::create([
            'nom' => 'Plat 2',
            'photo' => 'plat2.jpg',
            'prix' => '10.12',
            'note' => '8.0',
            'id_restaurateur' => '1'
        ]);

        ///////////////////////////
        
        Plats::create([
            'nom' => 'Plat 1',
            'photo' => 'plat1.jpg',
            'prix' => '5.2',
            'note' => '5.2',
            'id_restaurateur' => '2'
        ]);

        Plats::create([
            'nom' => 'Plat 2',
            'photo' => 'plat2.jpg',
            'prix' => '10.12',
            'note' => '8.0',
            'id_restaurateur' => '2'
        ]);

        ///////////////////////////
        
        Plats::create([
            'nom' => 'Plat 1',
            'photo' => 'plat1.jpg',
            'prix' => '5.2',
            'note' => '6.4',
            'id_restaurateur' => '3'
        ]);

        Plats::create([
            'nom' => 'Plat 2',
            'photo' => 'plat2.jpg',
            'prix' => '10.12',
            'note' => '9.0',
            'id_restaurateur' => '3'
        ]);

        ///////////////////////////
        
        Plats::create([
            'nom' => 'Plat 1',
            'photo' => 'plat1.jpg',
            'prix' => '5.2',
            'note' => '4.1',
            'id_restaurateur' => '4'
        ]);

        Plats::create([
            'nom' => 'Plat 2',
            'photo' => 'plat2.jpg',
            'prix' => '10.12',
            'note' => '4.3',
            'id_restaurateur' => '4'
        ]);

        ///////////////////////////
        
        Plats::create([
            'nom' => 'Plat 1',
            'photo' => 'plat1.jpg',
            'prix' => '5.2',
            'note' => '6.4',
            'id_restaurateur' => '5'
        ]);

        Plats::create([
            'nom' => 'Plat 2',
            'photo' => 'plat2.jpg',
            'prix' => '10.12',
            'note' => '6.7',
            'id_restaurateur' => '5'
        ]);

        ///////////////////////////
        
        Plats::create([
            'nom' => 'Plat 1',
            'photo' => 'plat1.jpg',
            'prix' => '5.2',
            'note' => '7.4',
            'id_restaurateur' => '6'
        ]);

        Plats::create([
            'nom' => 'Plat 2',
            'photo' => 'plat2.jpg',
            'prix' => '10.12',
            'note' => '8.1',
            'id_restaurateur' => '6'
        ]);

        ///////////////////////////
    }
}
