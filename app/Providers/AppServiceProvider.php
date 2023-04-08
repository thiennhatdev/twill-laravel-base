<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Repositories\AboutRepository;

class AppServiceProvider extends ServiceProvider
{
    public $about;
    public function __construct()
    {
        $this->about = resolve(AboutRepository::class);
    }
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
        view()->composer('*', function ($view)
        {          
            $view->with('about', $this->about->index()[0]);
        });
    }
}
