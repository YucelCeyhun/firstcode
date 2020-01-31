<?php


namespace App\Helper\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array inputFilter(array $inputs)
 *
 *
 * @method static array breadcrumbList(...$args)
 *
 * @see \App\Helper\General
 */
class General extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'generalHelper';
    }
}
