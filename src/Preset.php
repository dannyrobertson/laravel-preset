<?php

namespace Danny\LaravelPreset;

use Illuminate\Foundation\Console\Presets\Preset as DannyPreset;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Arr;


class Preset extends DannyPreset
{
    public static function install()
    {
        static::makeAuth();
        static::updatePackages();
        static::updatePackages();
        static::updateResources();
        static::updateMix();
    }

    public static function makeAuth()
    {
        Artisan::call('make:auth', ['--no-interaction' => true]);
    }

    public static function updatePackageArray($packages)
    {
        return array_merge([
            '@fortawesome/fontawesome-free' => '^5.5.x',
            'bootstrap' => '^4.1.x'
        ], Arr::except($packages, [
            'bootstrap',
            'lodash',
            'vue'
        ]));
    }

    public static function updateResources()
    {
        File::copyDirectory(__DIR__ . '/stubs/resources', resource_path());
    }

    public static function updateMix()
    {
        copy(__DIR__ . '/stubs/webpack.mix.js', base_path('webpack.mix.js'));
    }
}
