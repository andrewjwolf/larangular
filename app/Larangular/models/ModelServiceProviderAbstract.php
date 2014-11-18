<?php namespace Larangular\Models;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Event;
use Larangular\Models\ModelServiceProviderInterface;
class ModelServiceProviderAbstract extends ServiceProvider implements ModelServiceProviderInterface {

    public function register()
    {

    }

}