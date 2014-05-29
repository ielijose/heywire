<?php namespace Ielijose\HeywireLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class Heywire extends Facade
{
	/**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'heywire'; }
}