<?php

namespace VI\LaravelSeoable;

use Illuminate\Support\ServiceProvider;

class LaravelSeoableProvider extends ServiceProvider
{

    public function register()
    {
        /*
        $this->app->bind('settings', function ($app) {
            return new LaravelSiteSettings();
        });

        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'laravelsitesettings');
        */
    }

    public function boot()
    {


        if ($this->app->runningInConsole()) {

            //$this->publishes([
            //    __DIR__ . '/../config/config.php' => config_path('laravelsitesettings.php'),
            //], 'config');

            //$this->publishes([
            //    __DIR__ . '/../stubs/MoonShine/Resources/SettingGroupResource.php.stub' => app_path('MoonShine/Resources/SettingGroupResource.php'),
            //    __DIR__ . '/../stubs/MoonShine/Resources/SettingResource.php.stub'      => app_path('MoonShine/Resources/SettingResource.php'),
            //], 'moonshine');

            $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        }

        /*


        Blade::directive('settings', function ($expression) {
            return "<?php echo settings($expression); ?>";
        });

        Setting::observe(LSSObserver::class);
        SettingGroup::observe(LSSObserver::class);
        */

    }

}