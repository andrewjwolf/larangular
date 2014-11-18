<?php namespace Larangular\User;

use Illuminate\Support\ServiceProvider;
class UserServiceProvider extends ServiceProvider {

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
		$this->package('larangular/user','user');
        include __DIR__.'/../../routes.php';
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app->register('Larangular\User\ControllerServiceProvider');
        $this->app->register('Larangular\User\ModelServiceProvider');
        $this->app->register('Larangular\User\RepositoryServiceProvider');
        $this->app->register('Larangular\User\EventServiceProvider');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array(
            'Larangular\User\ControllerServiceProvider',
            'Larangular\User\ModelServiceProvider',
            'Larangular\User\RepositoryServiceProvider',
            'Larangular\User\EventServiceProvider',
        );
	}

}
