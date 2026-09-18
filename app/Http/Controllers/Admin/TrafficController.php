<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VisitorLog;

class TrafficController extends Controller
{
    /**
     * Simple, self-hosted visit counter — intentionally basic. It answers
     * "is traffic growing," not a replacement for real analytics.
     */
    public function index()
    {
        $visitsToday = VisitorLog::whereDate('visited_at', today())->count();
        $visitsWeek = VisitorLog::where('visited_at', '>=', now()->startOfWeek())->count();

        $uniqueToday = VisitorLog::whereDate('visited_at', today())
            ->distinct('visitor_hash')
            ->count('visitor_hash');

        $uniqueWeek = VisitorLog::where('visited_at', '>=', now()->startOfWeek())
            ->distinct('visitor_hash')
            ->count('visitor_hash');

        $visitsOverTime = VisitorLog::selectRaw('DATE(visited_at) as day, COUNT(*) as total, COUNT(DISTINCT visitor_hash) as unique_total')
            ->where('visited_at', '>=', now()->subDays(29))
            ->groupBy('day')
            ->orderBy('day')
            ->get();

        $topPages = VisitorLog::selectRaw('page_url, COUNT(*) as total')
            ->where('visited_at', '>=', now()->subDays(29))
            ->groupBy('page_url')
            ->orderByDesc('total')
            ->take(10)
            ->get();

        return view('admin.traffic.index', compact(
            'visitsToday',
            'visitsWeek',
            'uniqueToday',
            'uniqueWeek',
            'visitsOverTime',
            'topPages'
        ));
    }
}
