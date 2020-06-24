<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'restau']);
        Role::create(['name' => 'membre']);
        Role::create(['name' => 'newMembre']);
        Role::create(['name' => 'newRestau']);
    }
}
