<?php

namespace Celaraze\DcatPlus\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MiddleInject
{
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }
}
