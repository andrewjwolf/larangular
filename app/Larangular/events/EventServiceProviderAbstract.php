<?php namespace Larangular\Events;

/**
 * @description a good place to place bootstrapping and binding related to controllers and views
 * Class ControllerServiceProvider
 */
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Event;
use Larangular\Events\EventServiceProviderInterface;
class EventServiceProviderAbstract extends ServiceProvider implements EventServiceProviderInterface {

    public function register()
    {

    }

}