<?php

namespace Danny\LaravelPreset;

use Laravel\Ui\UiCommand;
use Illuminate\Support\ServiceProvider;

class DannyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        UiCommand::macro('danny', function ($command) {
            Preset::install();

            $command->info('All finished! Please compile your assets, and you are all set to go!');
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
