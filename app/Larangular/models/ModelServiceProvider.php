<?php namespace Larangular\Models;

/**
 * @description a good place to place bootstrapping and binding related to models
 * Class ModelServiceProvider
 */
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Event;
class ModelServiceProvider extends ServiceProvider{

    public function register()
    {
        //Insert IOC Bindings

        //Insert Event Observer bindings
        Event::subscribe('Larangular\Models\User\UserEventHandler');
    }

}