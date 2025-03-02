<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string  $type
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, string $type): Response
    {
        $type = strtolower($type);

        if ($type === 'auth' && !Auth::check()) {
            return redirect()->route('admin.login');
        }

        if ($type === 'guest' && Auth::check()) {
            return redirect()->route('admin.dashboard');
        }

        return $next($request);
    }
}
