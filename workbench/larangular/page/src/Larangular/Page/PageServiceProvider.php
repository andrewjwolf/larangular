<?php namespace Larangular\Page;

use Illuminate\Support\ServiceProvider;

class PageServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('larangular/page','page');
        $this->app->register('Larangular\Page\ControllerServiceProvider');
        $this->app->register('Larangular\Page\ModelServiceProvider');
        $this->app->register('Larangular\Page\RepositoryServiceProvider');
        $this->app->register('Larangular\Page\EventServiceProvider');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array(
            'Larangular\Page\ControllerServiceProvider',
            'Larangular\Page\ModelServiceProvider',
            'Larangular\Page\RepositoryServiceProvider',
            'Larangular\Page\EventServiceProvider',
        );
	}

}
