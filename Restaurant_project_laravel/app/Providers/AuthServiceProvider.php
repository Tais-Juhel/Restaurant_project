<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('membre-users', function ($user){
            return $user->hasAnyRole(['membre', 'admin']);
        });

        Gate::define('restau-users', function ($user){
            return $user->hasAnyRole(['restau', 'admin']);
        });

        Gate::define('edit-users', function ($user){
            return $user->hasAnyRole(['restau', 'admin']);
        });

        Gate::define('admin-users', function ($user){
            return $user->isAdmin();
        });

        Gate::define('newR-users', function ($user){
            return $user->hasAnyRole(['newRestau']);
        });
        
        Gate::define('newM-users', function ($user){
            return $user->hasAnyRole(['newMembre']);
        });
    }
}
