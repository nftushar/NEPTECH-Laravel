<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Sociallink;
use Illuminate\Support\Facades\View;

class SocialServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $social = Sociallink::orderBy('id','desc')->paginate(3);
        view::share('social', $social);
    }
}
