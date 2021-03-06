<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Project;
use App\Models\News;
use App\Models\Service;
use App\Models\Client;
use App\Models\Setting;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        app()->singleton('lang',function(){
            if(session()->has('lang'))
                return session()->get('lang');
            else
                return 'ar';
        });
        $setting = Setting::first();
        view()->share('setting', $setting);
        view()->share('settings', Setting::count());
        view()->share('projects', Project::count());
        view()->share('news', News::count());
        view()->share('services', Service::count());
        view()->share('clients', Client::count());
    }
}
