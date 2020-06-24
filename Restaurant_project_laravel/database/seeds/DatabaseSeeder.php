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
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RestauTableSeeder::class);
        $this->call(PlatsTableSeeder::class);
        $this->call(MembresTableSeeder::class);
        $this->call(CommandesTableSeeder::class);
        $this->call(LignesTableSeeder::class);
    }
}
