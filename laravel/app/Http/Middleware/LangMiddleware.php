<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\App;

use Closure;

class LangMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!empty(session('lang'))) {
            App::setLocale(session('lang'));
        }
        return $next($request);
    }
}
