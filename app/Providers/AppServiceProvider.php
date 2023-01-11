<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $view->with('contact', Contact::query()->where('id',1)->first());
        });

        View::composer('*',function ($view)
        {
           $view->with('users',User::all()->first());
        });

        View::composer('*',function ($view)
        {
            $view->with('menus',Menu::all());
        });



    }
}
