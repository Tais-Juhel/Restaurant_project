<?php

use App\Lignes;
use Illuminate\Database\Seeder;

class LignesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lignes::truncate();
    }
}
