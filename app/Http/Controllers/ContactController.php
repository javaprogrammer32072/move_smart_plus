<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Save Contact Form
     */
    public function store(ContactRequest $request)
    {
        try {

            Contact::create([
                'name'       => $request->name,
                'email'      => $request->email,
                'phone'      => $request->phone,
                'subject'    => $request->subject,
                'message'    => $request->message,
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
            ]);

            return redirect()
                    ->back()
                    ->with('success', 'Thank you! Your message has been sent successfully.');

        } catch (\Exception $e) {

            return redirect()
                    ->back()
                    ->withInput()
                    ->with('error', 'Something went wrong. Please try again.');

            // For debugging (optional)
            // return $e->getMessage();
        }
    }

    /**
     * Admin Contact List
     */
    public function index(Request $request)
    {
        $contacts = Contact::latest()->paginate(10);

        return view('admin.contact.index', compact('contacts'));
    }

    /**
     * View Single Contact
     */
    public function show($id)
    {
        $contact = Contact::findOrFail($id);

        // Mark as read
        $contact->update([
            'is_read' => true
        ]);

        return view('admin.contact.show', compact('contact'));
    }

    /**
     * Delete Contact
     */
    public function destroy($id)
    {
        Contact::findOrFail($id)->delete();

        return redirect()
                ->back()
                ->with('success', 'Contact deleted successfully.');
    }
}