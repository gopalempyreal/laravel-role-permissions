<?php

namespace Empyrealinfotech\Permission\Exceptions;

use InvalidArgumentException;

class WildcardPermissionNotImplementsContract extends InvalidArgumentException
{
    public static function create()
    {
        return new static('Wildcard permission class must implements Empyrealinfotech\Permission\Contracts\Wildcard contract');
    }
}
