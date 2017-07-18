<?php

namespace App\Providers;

use App\Permission;
use Illuminate\Support\Facades\Gate;
//use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Request;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Post' => 'App\Policies\PostPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::before(function ($user) {
            if ($user->id === 1) {
                return true;
            }
        });

        Gate::define('home', function ($user) {
            return true;
        });

        $permissions = Permission::with('roles')->get();

        foreach ($permissions as $permission){
            Gate::define($permission->name, function ($user) use($permission) {
                return $user->hasPermission($permission);
            });
        }
    }
}
