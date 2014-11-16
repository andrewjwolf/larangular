<?php namespace Larangular\Controllers;

/**
 * @description a good place to place bootstrapping and binding related to controllers and views
 * Class ControllerServiceProvider
 */
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Event;
class ControllerServiceProvider extends ServiceProvider{

    public function register()
    {

        //Insert IOC Bindings
//        App::bind('MetaRepository', 'Larangular\Repositories\MetaRepository');

        //Insert Event Observer bindings
        Event::listen('home.view', function(){
            var_dump('home view event fired');
        });
    }

}