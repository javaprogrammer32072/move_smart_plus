<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterSubscriptionRequest;
use App\Models\NewsletterSubscription;

class NewsletterController extends Controller
{
    /**
     * Display the Newsletter landing page.
     */
    public function index()
    {
        $seo = [
            'title' => 'Subscribe to MoveSmartPlus Updates | Moving Tips & News',

            'description' => 'Subscribe to the MoveSmartPlus newsletter for moving tips, relocation information and service updates for Bihar and Jharkhand.',

            'keywords' => 'MoveSmartPlus newsletter, moving tips, relocation updates',

            'canonical' => url()->current(),

            'robots' => 'index, follow',

            'og_title' => 'Subscribe to MoveSmartPlus Updates',

            'og_description' => 'Moving tips, relocation information and service updates from MoveSmartPlus.',

            'og_image' => public_url('images/services/page/home-shift.png'),

            'og_url' => url()->current(),

            'twitter_title' => 'Subscribe to MoveSmartPlus Updates',

            'twitter_description' => 'Moving tips, relocation information and service updates from MoveSmartPlus.',

            'twitter_image' => public_url('images/services/page/home-shift.png'),
        ];

        return view('pages.newsletter', compact('seo'));
    }

    /**
     * Save a newsletter subscription.
     */
    public function subscribe(NewsletterSubscriptionRequest $request)
    {
        try {

            $existing = NewsletterSubscription::where('email', $request->email)->first();

            if ($existing) {
                return redirect()
                    ->back()
                    ->with('newsletter_success', "You're already subscribed. Thank you!");
            }

            NewsletterSubscription::create([
                'email' => $request->email,
                'status' => 'subscribed',
                'subscribed_at' => now(),
            ]);

            return redirect()
                ->back()
                ->with('newsletter_success', 'Thank you for subscribing to Move Smart Plus updates.');

        } catch (\Exception $e) {

            return redirect()
                ->back()
                ->withInput()
                ->with('newsletter_error', 'Something went wrong. Please try again.');

        }
    }
}
