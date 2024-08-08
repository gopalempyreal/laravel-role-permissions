<?php

namespace Empyrealinfotech\Permission\Controllers;

use Illuminate\Http\Request;
use Empyrealinfotech\Permission\Permission;

class PermissionController
{
    public function __invoke(Permission $inspire) {
        $quote = $inspire->justDoIt();

        return view('role-permissions::index', compact('quote'));
    }
}
