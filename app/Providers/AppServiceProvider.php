<?php

namespace App\Providers;
use App\Models\Sociallink;
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
        $social = Sociallink::orderBy('id','desc')->paginate(3);
        view::share('social', $social);
    }
}
