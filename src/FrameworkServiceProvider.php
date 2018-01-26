<?php

namespace Reveal\Framework;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Reveal\Framework\Classes\FrameworkClass;
use Reveal\Framework\Classes\SystemLogs;

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
            __DIR__ . '/Config/framework.php' => config_path('framework.php'),
        ], 'framework-config');

        //$this->loadRoutesFrom(__DIR__ . '/Routes/web.php');

        $this->loadMigrationsFrom(__DIR__ . '/Migrations');

        $this->loadTranslationsFrom(__DIR__ . '/Translations', 'framework');

        $this->publishes([
            __DIR__ . '/Translations' => resource_path('lang/vendor/framework'),
        ]);

        $this->loadViewsFrom(__DIR__ . '/Views', 'framework');

        $this->publishes([
            __DIR__ . '/Views' => resource_path('views/vendor/framework'),
        ], 'framework-views');

        $this->publishes([
            __DIR__ . '/Assets' => public_path('vendor/framework'),
        ], 'framework-assets');

        if ($this->app->runningInConsole()) {
            $this->commands([
                \Reveal\Framework\Commands\FrameworkCommand::class,
            ]);
        }

        $this->publishVendors();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/Config/framework.php',
            'framework'
        );

        $this->app->bind('Framework', function () {
            return new FrameworkClass();
        });

        $this->app->bind('SystemLogs', function () {
            return new SystemLogs();
        });
    }

    protected function publishVendors()
    {
        $this->publishes([

            base_path('vendor/brotzka/laravel-dotenv-editor/src/views') => resource_path('views/vendor/dotenv-editor'),

              __DIR__ . '/Views' => resource_path('views/vendor/framework'),

              __DIR__ . '/Translations' => resource_path('lang/vendor/framework'),

              __DIR__ . '/Assets' => public_path('vendor/framework'),

              __DIR__ . '/Config/framework.php' => config_path('framework.php'),

            base_path('vendor/anhskohbo/no-captcha/src/config/captcha.php') => config_path(),

            base_path('vendor/brotzka/laravel-dotenv-editor/src/config/dotenveditor.php') => config_path(),

            base_path('vendor/shawnsandy/img-fly/src/Config/imgfly.php') => config_path(),

            base_path('vendor/pragmarx/firewall/src/config/config.php') => config_path('firewall.php'),

            base_path('vendor/brotzka/laravel-dotenv-editor/src/views') => resource_path('views/vendor/dotenv-editor'),

            base_path('/vendor/shawnsandy/backstory/src/resources/assets/js') => public_path('assets/backstory'),

            base_path('/vendor/shawnsandy/backstory/src/resources/assets/sass') => public_path('assets/backstory'),

        ], 'framework-vendors');
    }
}
