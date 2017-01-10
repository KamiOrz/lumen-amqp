<?php 
namespace KamiOrz\Amqp\Facades;

use Illuminate\Support\Facades\Facade;

class Amqp extends Facade
{

    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Amqp';
    }

}