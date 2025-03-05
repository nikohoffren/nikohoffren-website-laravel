<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetDefaultThemeAndLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Set default language if not set
        if (!session()->has('language')) {
            session(['language' => 'en']);
        }

        // Set default theme if not set
        if (!session()->has('theme')) {
            session(['theme' => 'dark']);
        }

        return $next($request);
    }
}
