<?php namespace Larangular\Models;

/**
 * @description a good place to place bootstrapping and binding related to models
 * Class ControllerServiceProvider
 */
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
class ModelServiceProvider extends ServiceProvider{

    public function register()
    {
//        App::bind('meta', 'Larangular\Repositories\MetaRepository');
    }

}