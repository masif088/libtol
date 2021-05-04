<?php

namespace ImajiDigitech\Libtol\Providers;

use Illuminate\Support\ServiceProvider;
use ImajiDigitech\Libtol\Component\Date;
use ImajiDigitech\Libtol\Component\Daterange;
use ImajiDigitech\Libtol\Component\Input;
use ImajiDigitech\Libtol\Component\MasterLayout;
use ImajiDigitech\Libtol\Component\Select;
use ImajiDigitech\Libtol\Component\Select2;
use ImajiDigitech\Libtol\Component\Summernote;
use ImajiDigitech\Libtol\Component\Textarea;
use ImajiDigitech\Libtol\Component\Time;

class LibtolServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views'),
            __DIR__.'/../public' => public_path('public'),
            __DIR__.'/../app' => app_path('app')
        ]);
//        $this->loadViewComponentsAs('',[
//            Date::class,
//            Daterange::class,
//            Input::class,
//            MasterLayout::class,
//            Select::class,
//            Select2::class,
//            Summernote::class,
//            Textarea::class,
//            Time::class
//        ]);
    }
}
