<?php

namespace Ibnisnar\Accesscontroll\Exceptions;

use InvalidArgumentException;

class WildcardPermissionNotImplementsContract extends InvalidArgumentException
{
    public static function create()
    {
        return new static('Wildcard permission class must implements Ibnisnar\Accesscontroll\Contracts\Wildcard contract');
    }
}
