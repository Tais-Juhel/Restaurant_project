<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);
        
        $membre = User::create([
            'name' => 'membre',
            'email' => 'membre@membre.com',
            'password' => Hash::make('password')
        ]);
        
        $restau = User::create([
            'name' => 'restaurateur',
            'email' => 'restau@restau.com',
            'password' => Hash::make('password')
        ]);

        $adminRole = Role::where('name', 'admin')->first();
        $membreRole = Role::where('name', 'membre')->first();
        $restauRole = Role::where('name', 'restau')->first();

        $admin->roles()->attach($adminRole);
        $membre->roles()->attach($membreRole);
        $restau->roles()->attach($restauRole);
    }
}
