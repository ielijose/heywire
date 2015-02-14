<?php namespace Ielijose\Heywire;

use Illuminate\Support\ServiceProvider;

class HeywireServiceProvider extends ServiceProvider {

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
		$this->package('ielijose/heywire');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{	
		$this->app['heywire'] = $this->app->share(function($app)
		{
			$config = $app['config']->get('heywire::config');
			return new Heywire($config);
		});

		$this->app->booting(function()
		{
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('Heywire', 'Ielijose\Heywire\Facades\Heywire');
		});

	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
