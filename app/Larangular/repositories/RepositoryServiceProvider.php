<?php namespace Larangular\Repositories;

/**
 * @description a good place to place bootstrapping and binding related to repositories
 * Class RepositoryServiceProvider
 */
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
class RepositoryServiceProvider extends ServiceProvider{

    public function register()
    {
        //Bind any instantiation of the MetaRepositoryInterface to MetaRepository
        App::bind('Larangular\Repositories\Meta\MetaRepositoryInterface', 'Larangular\Repositories\Meta\MetaRepository');
    }

}