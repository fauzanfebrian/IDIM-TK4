<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ForceHttps
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $host = $request->getHost();


        if ($host !== 'localhost' && $host !== "127.0.0.1") {
            \URL::forceScheme('https');
            $request->server->set('HTTPS', true);
        }

        return $next($request);
    }
}
