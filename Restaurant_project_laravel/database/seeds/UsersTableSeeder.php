<?php

use App\Role;
use App\User;
use App\Membres;
use App\Restaurateurs;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Restaurateurs::truncate();
        Membres::truncate();
        User::truncate();
        DB::table('role_user')->truncate();

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'type' => '1'
        ]);
        
        $membre = User::create([
            'name' => 'membre',
            'email' => 'membre@membre.com',
            'password' => Hash::make('password'),
            'type' => '2'
        ]);
        
        $restau = User::create([
            'name' => 'restaurateur',
            'email' => 'restau@restau.com',
            'password' => Hash::make('password'),
            'type' => '3'
        ]);

        $restau1 = User::create([
            'name' => 'SoupoChou',
            'email' => 'soupochou@restau.com',
            'password' => Hash::make('password'),
            'type' => '3'
        ]);

        $restau2 = User::create([
            'name' => 'Mcdo',
            'email' => 'mcdo@restau.com',
            'password' => Hash::make('password'),
            'type' => '3'
        ]);

        $restau3 = User::create([
            'name' => 'KFC',
            'email' => 'kfc@restau.com',
            'password' => Hash::make('password'),
            'type' => '3'
        ]);

        $restau4 = User::create([
            'name' => 'restogogo',
            'email' => 'restogogo@restau.com',
            'password' => Hash::make('password'),
            'type' => '3'
        ]);

        $restau5 = User::create([
            'name' => 'ALaMaison',
            'email' => 'a-la-maison@restau.com',
            'password' => Hash::make('password'),
            'type' => '3'
        ]);

        $restau6 = User::create([
            'name' => 'LeToubib',
            'email' => 'le-toubib@restau.com',
            'password' => Hash::make('password'),
            'type' => '3'
        ]);

        $adminRole = Role::where('name', 'admin')->first();
        $membreRole = Role::where('name', 'membre')->first();
        $restauRole = Role::where('name', 'restau')->first();

        $admin->roles()->attach($adminRole);
        $membre->roles()->attach($membreRole);
        $restau->roles()->attach($restauRole);
        $restau1->roles()->attach($restauRole);
        $restau2->roles()->attach($restauRole);
        $restau3->roles()->attach($restauRole);
        $restau4->roles()->attach($restauRole);
        $restau5->roles()->attach($restauRole);
        $restau6->roles()->attach($restauRole);
    }
}
