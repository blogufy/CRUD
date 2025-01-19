<?php
namespace Blogufy\Crud;

use Blogufy\Crud\View\Components\ArticleTable;
use Blogufy\Crud\View\Components\Dashboard\ArticleForm;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class BlogufyCrudServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        // configurations
        if($this->app->runningInConsole()){
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('blogufycrud.php')
            ]);
        }

        // routes
        $this->registerRoutes();

        // views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'blogufy');

        $this->customViewComponents();
       
    }

    //Register routes with dynamic configuration
    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function(){
            $this->loadRoutesFrom(__DIR__. '/../routes/web.php');
        });
    }

    //Get the dynamic configurations
    protected function routeConfiguration()
    {
        return [
            'prefix' => config('blogufycrud.prefix'),
            'middleware' => config('blogufycrud.middleware'),
        ];
    }

    protected function customViewComponents()
    {
         // View components
         $this->loadViewComponentsAs('blogufy', [
            ArticleTable::class,
            ArticleForm::class,
        ]);
    }
}