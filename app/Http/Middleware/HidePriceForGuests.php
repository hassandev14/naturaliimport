<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HidePriceForGuests
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check()) {
            session(['hide_price' => true]);  // Guest ke liye price hide
        } else {
            session()->forget('hide_price');  // Agar logged in hai to session remove kar do
        }

        return $next($request);
    }
}
