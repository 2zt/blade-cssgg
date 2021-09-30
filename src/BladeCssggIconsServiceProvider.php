<?php

declare(strict_types=1);

namespace BladeUI\CssggIcons;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeCssggIconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-cssgg', []);

            $factory->add('css-gg-icons', array_merge(['path' => __DIR__ . '/../resources/svg'], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/blade-cssgg.php', 'blade-cssgg');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/svg' => public_path('vendor/blade-cssgg'),
            ], 'blade-cssgg');

            $this->publishes([
                __DIR__ . '/../config/blade-cssgg.php' => $this->app->configPath('blade-cssgg.php'),
            ], 'blade-cssgg-config');
        }
    }
}
