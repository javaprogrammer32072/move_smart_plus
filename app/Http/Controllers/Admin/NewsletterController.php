<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsletterSubscription;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class NewsletterController extends Controller
{
    public function index(Request $request)
    {
        $subscribers = NewsletterSubscription::when($request->filled('search'), function ($q) use ($request) {
                $q->where('email', 'like', '%' . $request->search . '%');
            })
            ->latest('subscribed_at')
            ->paginate(25)
            ->withQueryString();

        $total = NewsletterSubscription::count();

        return view('admin.newsletter.index', [
            'subscribers' => $subscribers,
            'total' => $total,
            'filters' => $request->only('search'),
        ]);
    }

    public function export(): StreamedResponse
    {
        $filename = 'newsletter-subscribers-' . now()->format('Y-m-d') . '.csv';

        $callback = function () {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, ['Email', 'Status', 'Subscribed At']);

            NewsletterSubscription::orderBy('subscribed_at')->chunk(200, function ($rows) use ($handle) {
                foreach ($rows as $row) {
                    fputcsv($handle, [
                        $row->email,
                        $row->status,
                        optional($row->subscribed_at)->format('Y-m-d H:i'),
                    ]);
                }
            });

            fclose($handle);
        };

        return response()->streamDownload($callback, $filename, [
            'Content-Type' => 'text/csv',
        ]);
    }
}
