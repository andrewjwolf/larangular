<?php namespace Larangular\Controllers;

/**
 * @description a good place to place bootstrapping and binding related to controllers and views
 * Class ControllerServiceProvider
 */
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Event;
use Larangular\Controllers\ControllerServiceProviderInterface;
class ControllerServiceProviderAbstract extends ServiceProvider implements ControllerServiceProviderInterface {

    public function register()
    {

    }

}