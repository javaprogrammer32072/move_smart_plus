<?php

namespace App\Http\Middleware;

use App\Models\VisitorLog;
use Closure;
use Illuminate\Http\Request;

class TrackVisitor
{
    /**
     * Logs one row per public page view for the simple, self-hosted
     * traffic counter (Section 10, "build it yourself" option). Never a
     * raw IP — only a hash. Skips admin/API routes and non-GET requests,
     * and never lets a logging failure affect the actual page response.
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->isMethod('get') && ! $request->is('admin*') && ! $request->is('api*') && ! $request->ajax()) {
            try {
                VisitorLog::create([
                    'page_url' => $request->path(),
                    'visitor_hash' => hash('sha256', $request->ip() . config('app.key')),
                    'visited_at' => now(),
                ]);
            } catch (\Throwable $e) {
                // Traffic logging must never break a real page view.
            }
        }

        return $next($request);
    }
}
