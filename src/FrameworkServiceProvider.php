<?php

namespace Reveal\Framework;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class FrameworkServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $router->aliasMiddleware('framework', \Reveal\Framework\Middleware\FrameworkMiddleware::class);

        $this->publishes([
            __DIR__.'/Config/framework.php' => config_path('framework.php'),
        ], 'framework_config');

        $this->loadRoutesFrom(__DIR__ . '/Routes/web.php');

        $this->loadMigrationsFrom(__DIR__ . '/Migrations');

        $this->loadTranslationsFrom(__DIR__ . '/Translations', 'framework');

        $this->publishes([
            __DIR__ . '/Translations' => resource_path('lang/vendor/framework'),
        ]);

        $this->loadViewsFrom(__DIR__ . '/Views', 'framework');

        $this->publishes([
            __DIR__ . '/Views' => resource_path('views/vendor/framework'),
        ]);

        $this->publishes([
            __DIR__ . '/Assets' => public_path('vendor/framework'),
        ], 'framework_assets');

        if ($this->app->runningInConsole()) {
            $this->commands([
                \Reveal\Framework\Commands\FrameworkCommand::class,
            ]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/Config/framework.php', 'framework'
        );
    }
}
