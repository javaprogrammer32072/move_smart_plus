<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminActivityLog;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public const STATUSES = ['new', 'read', 'resolved'];

    public function index(Request $request)
    {
        $contacts = Contact::when($request->filled('status'), fn ($q) => $q->where('status', $request->status))
            ->when($request->filled('search'), function ($q) use ($request) {
                $term = $request->search;
                $q->where(function ($q) use ($term) {
                    $q->where('name', 'like', "%{$term}%")
                        ->orWhere('email', 'like', "%{$term}%");
                });
            })
            ->latest()
            ->paginate(25)
            ->withQueryString();

        return view('admin.contact.index', [
            'contacts' => $contacts,
            'statuses' => self::STATUSES,
            'filters' => $request->only(['status', 'search']),
        ]);
    }

    public function show(Contact $contact)
    {
        if ($contact->status === 'new') {
            $contact->update(['status' => 'read', 'is_read' => true]);
        }

        return view('admin.contact.show', compact('contact'));
    }

    public function updateStatus(Request $request, Contact $contact)
    {
        $request->validate([
            'status' => ['required', 'in:' . implode(',', self::STATUSES)],
        ]);

        $contact->update([
            'status' => $request->status,
            'is_read' => $request->status !== 'new',
        ]);

        AdminActivityLog::record("Marked contact from {$contact->name} as {$request->status}", $contact->email);

        return back()->with('success', 'Status updated.');
    }
}
