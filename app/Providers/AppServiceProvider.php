<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use SendChow\Modules\Authentication\Contract\RegisterContract;
use SendChow\Modules\Authentication\Repo\RegisterRepo;
use SendChow\Modules\Merchant\Contract\MerchantContract;
use SendChow\Modules\Merchant\Repo\MerchantRepo;

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
        Schema::defaultStringLength(191);
    }

    /**
     * RegisterContract any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $app = $this->app;

        $app->bind(RegisterContract::class, RegisterRepo::class);
        $app->bind(MerchantContract::class, MerchantRepo::class);
    }
}
