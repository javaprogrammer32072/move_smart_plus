<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class HelpCenterController extends Controller
{
    /**
     * Display the Help Center, optionally filtered by a search term.
     */
    public function index(Request $request)
    {
        $search = trim((string) $request->query('search', ''));
        $search = mb_substr($search, 0, 100);

        $faqs = Faq::active()
            ->when($search !== '', fn ($query) => $query->search($search))
            ->orderBy('category')
            ->orderBy('sort_order')
            ->get()
            ->groupBy('category');

        // Fall back to the full FAQ list when a search returns no matches,
        // so the page still has something useful to show.
        $noResults = $search !== '' && $faqs->isEmpty();

        if ($noResults) {
            $faqs = Faq::active()
                ->orderBy('category')
                ->orderBy('sort_order')
                ->get()
                ->groupBy('category');
        }

        $seo = [
            'title' => 'Help Center | MoveSmartPlus Support & FAQs',

            'description' => 'Find answers to common questions about booking, packing, moving, pricing, vehicle transportation and storage with MoveSmartPlus, or get in touch with our support team.',

            'keywords' => 'MoveSmartPlus help center, packers and movers FAQ, moving questions, relocation support',

            'canonical' => url('/help-center'),

            'robots' => $search !== '' ? 'noindex, follow' : 'index, follow',

            'og_title' => 'Help Center | MoveSmartPlus',

            'og_description' => 'Answers to common questions about booking, packing, moving and vehicle transportation with MoveSmartPlus.',

            'og_image' => public_url('images/smart-move-plus.png'),

            'og_url' => url('/help-center'),

            'twitter_title' => 'Help Center | MoveSmartPlus',

            'twitter_description' => 'Answers to common questions about moving with MoveSmartPlus.',

            'twitter_image' => public_url('images/smart-move-plus.png'),
        ];

        return view('pages.help-center', compact('seo', 'faqs', 'search', 'noResults'));
    }
}
