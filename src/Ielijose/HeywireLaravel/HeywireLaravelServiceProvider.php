<?php namespace Ielijose\HeywireLaravel;

use Illuminate\Support\ServiceProvider;

class HeywireLaravelServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['heywire'] = $this->app->share(function($app)
		{
			return new Heywire;
		});

		$this->app->booting(function()
		{
		  $loader = \Illuminate\Foundation\AliasLoader::getInstance();
		  $loader->alias('Heywire', 'Ielijose\HeywireLaravel\Facades\Heywire');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('heywire');
	}

}