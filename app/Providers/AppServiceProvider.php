<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Banner;
use App\Models\Setting;

class AppServiceProvider extends ServiceProvider
{  
    public function register()
    {
        //
    }

    public function boot()
    {

        $banner_data = Banner::where('id',1)->first();
        $settings_data = Setting::where('id',1)->first();
        view()->share('global_banner_data', $banner_data);
        view()->share('global_settings_data', $settings_data);

    }
}
