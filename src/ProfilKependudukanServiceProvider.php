<?php namespace Bantenprov\ProfilKependudukan;

use Illuminate\Support\ServiceProvider;
use Bantenprov\ProfilKependudukan\Console\Commands\ProfilKependudukanCommand;

/**
 * The ProfilKependudukanServiceProvider class
 *
 * @package Bantenprov\ProfilKependudukan
 * @author  bantenprov <developoer.bantenprov@gmail.com>
 */
class ProfilKependudukanServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Bootstrap handles
        $this->routeHandle();
        $this->configHandle();
        $this->langHandle();
        $this->viewHandle();
        $this->assetHandle();
        $this->migrationHandle();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('profil-kependudukan', function ($app) {
            return new ProfilKependudukan;
        });

        $this->app->singleton('command.profil-kependudukan', function ($app) {
            return new ProfilKependudukanCommand;
        });

        $this->commands('command.profil-kependudukan');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'profil-kependudukan',
            'command.profil-kependudukan',
        ];
    }

    /**
     * Loading package routes
     *
     * @return void
     */
    protected function routeHandle()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
    }

    /**
     * Loading and publishing package's config
     *
     * @return void
     */
    protected function configHandle()
    {
        $packageConfigPath = __DIR__.'/config/config.php';
        $appConfigPath     = config_path('profil-kependudukan.php');

        $this->mergeConfigFrom($packageConfigPath, 'profil-kependudukan');

        $this->publishes([
            $packageConfigPath => $appConfigPath,
        ], 'config');
    }

    /**
     * Loading and publishing package's translations
     *
     * @return void
     */
    protected function langHandle()
    {
        $packageTranslationsPath = __DIR__.'/resources/lang';

        $this->loadTranslationsFrom($packageTranslationsPath, 'profil-kependudukan');

        $this->publishes([
            $packageTranslationsPath => resource_path('lang/vendor/profil-kependudukan'),
        ], 'lang');
    }

    /**
     * Loading and publishing package's views
     *
     * @return void
     */
    protected function viewHandle()
    {
        $packageViewsPath = __DIR__.'/resources/views';

        $this->loadViewsFrom($packageViewsPath, 'profil-kependudukan');

        $this->publishes([
            $packageViewsPath => resource_path('views/vendor/profil-kependudukan'),
        ], 'views');
    }

    /**
     * Publishing package's assets (JavaScript, CSS, images...)
     *
     * @return void
     */
    protected function assetHandle()
    {
        $packageAssetsPath = __DIR__.'/resources/assets';

        $this->publishes([
            $packageAssetsPath => public_path('vendor/profil-kependudukan'),
        ], 'public');
    }

    /**
     * Publishing package's migrations
     *
     * @return void
     */
    protected function migrationHandle()
    {
        $packageMigrationsPath = __DIR__.'/database/migrations';

        $this->loadMigrationsFrom($packageMigrationsPath);

        $this->publishes([
            $packageMigrationsPath => database_path('migrations')
        ], 'migrations');
    }
}
