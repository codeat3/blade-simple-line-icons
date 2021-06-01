<?php

declare(strict_types=1);

namespace Codeat3\BladeSimpleLineIcons;

use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Container\Container;

final class BladeSimpleLineIconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-simple-line-icons', []);

            $factory->add('simple-line-icons', array_merge(['path' => __DIR__.'/../resources/svg'], $config));
        });

    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blade-simple-line-icons.php', 'blade-simple-line-icons');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-simple-line-icons'),
            ], 'blade-simple-line-icons');

            $this->publishes([
                __DIR__.'/../config/blade-simple-line-icons.php' => $this->app->configPath('blade-simple-line-icons.php'),
            ], 'blade-simple-line-icons-config');
        }
    }

}
