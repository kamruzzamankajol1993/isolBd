<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\SystemInformation;
use App\Models\Jobcategory;
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
        $jobCategoryList = Jobcategory::get();
        $icon_name = SystemInformation::value('icon');
        $logo_name = SystemInformation::value('logo');
        $ins_name = SystemInformation::value('System_name');

        view()->share('jobCategoryList', $jobCategoryList);
        view()->share('ins_name', $ins_name);
        view()->share('logo',  $logo_name);
        view()->share('icon', $icon_name);
    }
}
