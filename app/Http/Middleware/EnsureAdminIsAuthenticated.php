<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureAdminIsAuthenticated
{
    /**
     * Every /admin/* page and API must pass through here — the sidebar
     * simply not linking to a page is not access control.
     */
    public function handle(Request $request, Closure $next)
    {
        $loggedInAt = $request->session()->get('admin_logged_in_at');

        $expired = $loggedInAt
            ? now()->diffInDays($loggedInAt) > config('admin.session_lifetime_days')
            : true;

        if (! $request->session()->get('admin_authenticated') || $expired) {

            $request->session()->forget(['admin_authenticated', 'admin_logged_in_at']);

            return redirect()->route('admin.login')->with('error', 'Please log in to continue.');
        }

        return $next($request);
    }
}
