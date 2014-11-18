<?php namespace Larangular\Repositories;

/**
 * @description a good place to place bootstrapping and binding related to controllers and views
 * Class ControllerServiceProvider
 */
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Event;
use Larangular\Repositories\RepositoryServiceProviderInterface;
class RepositoryServiceProviderAbstract extends ServiceProvider implements RepositoryServiceProviderInterface {

    public function register()
    {

    }

}