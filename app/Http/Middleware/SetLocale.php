<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Stevebauman\Location\Facades\Location;
use illuminate\support\facades\App;
use illuminate\support\facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->has('lang')) {
            $locale = $request->get('lang');
        } else {
            $location = Location::get();
            $countryCode = $location ? $location->countryCode : 'US';

            $locales = [
                'US' => 'en',
                'FR' => 'fr',
                'DE' => 'de',
            ];

            $locale = $locales[$countryCode] ?? 'en';
        }

        App::setLocale($locale);
        Session::put('locale', $locale);

        return $next($request);
    }
}
