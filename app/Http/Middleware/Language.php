<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $locale = session('locale');
        if (is_null($locale)) {
            App::setLocale('tr');
            Carbon::setLocale('tr');

            return $next($request);

        }
        App::setLocale($locale);
        Carbon::setLocale($locale);

        return $next($request);
    }
}
