<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Console\ClientCommand;
use Laravel\Passport\Console\InstallCommand;
use Laravel\Passport\Console\KeysCommand;
use Laravel\Passport\Passport;

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
        Blade::directive('currency', function ($expression) {
            return "Rp. <?php echo number_format($expression, 0, ',', '.'); ?>";
        });

        Schema::defaultStringLength(191);
        Passport::routes();

        /*ADD THIS LINES*/
        $this->commands([
            InstallCommand::class,
            ClientCommand::class,
            KeysCommand::class,
        ]);
    }
}
