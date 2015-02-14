<?php namespace Ielijose\Heywire\Facades;

use Illuminate\Support\Facades\Facade as IlluminateFacade;

class Heywire extends IlluminateFacade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'heywire'; }


}