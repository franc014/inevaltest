<?php

namespace App\Providers;

use App\Policies\StudentPolicy;
use App\User;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        //'App\Model' => 'App\Policies\ModelPolicy',
        //User::class => StudentPolicy::class
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);
        $gate->before(function ($user, $ability) {
            if ($user->isSuperAdmin()) {
                return true;
            }
        });
        $gate->define('store-student', function ($user) {
            return $user->isAdmin();
        });
        $gate->define('edit-student', function ($user) {
            return $user->isAdmin();
        });

        $gate->define('all-student-info', function ($user) {
            return $user->isAdmin();
        });





    }
}
