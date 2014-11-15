<?php namespace Larangular\Controllers;

/**
 * @description a good place to place bootstrapping and binding related to controllers and views
 * Class ControllerServiceProvider
 */
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
class ControllerServiceProvider extends ServiceProvider{

    public function register()
    {
//        App::bind('MetaRepository', 'Larangular\Repositories\MetaRepository');
    }

}