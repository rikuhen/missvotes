<?php

namespace MissVote\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
         //USERS
        $this->app->bind(
            'MissVote\RepositoryInterface\UserRepositoryInterface',
            'MissVote\Repository\UserRepository'
        );

         //USERS
        $this->app->bind(
            'MissVote\RepositoryInterface\ClientRepositoryInterface',
            'MissVote\Repository\ClientRepository'
        );

    }
}
