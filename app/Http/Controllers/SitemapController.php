<?php

namespace App\Http\Controllers;

use App\Support\Blog;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    /**
     * XML sitemap of every public, indexable page.
     *
     * Built from the same route names and data sources the site itself
     * uses (service_nav_links(), Blog::all()), so it can't drift out of
     * sync with what actually exists. Transactional/per-booking pages
     * are intentionally excluded — they're marked noindex instead.
     */
    public function index()
    {
        $urls = [
            ['loc' => url('/'), 'priority' => '1.0', 'changefreq' => 'weekly'],
            ['loc' => route('services.index'), 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['loc' => route('about'), 'priority' => '0.6', 'changefreq' => 'monthly'],
            ['loc' => route('mission'), 'priority' => '0.5', 'changefreq' => 'monthly'],
            ['loc' => route('timeline'), 'priority' => '0.5', 'changefreq' => 'monthly'],
            ['loc' => route('help-center'), 'priority' => '0.6', 'changefreq' => 'monthly'],
            ['loc' => route('contact-us'), 'priority' => '0.7', 'changefreq' => 'monthly'],
            ['loc' => route('newsletter'), 'priority' => '0.3', 'changefreq' => 'yearly'],
            ['loc' => route('privacy-policy'), 'priority' => '0.2', 'changefreq' => 'yearly'],
            ['loc' => route('terms'), 'priority' => '0.2', 'changefreq' => 'yearly'],
            ['loc' => route('blogs.index'), 'priority' => '0.7', 'changefreq' => 'weekly'],
        ];

        foreach (service_nav_links() as $link) {
            $urls[] = ['loc' => route($link['route']), 'priority' => '0.8', 'changefreq' => 'monthly'];
        }

        foreach (Blog::all() as $blog) {
            $urls[] = [
                'loc' => route('blogs.show', $blog['slug']),
                'priority' => '0.6',
                'changefreq' => 'monthly',
                'lastmod' => $blog['published_at'],
            ];
        }

        $xml = view('sitemap', ['urls' => $urls])->render();

        return response($xml, 200)->header('Content-Type', 'application/xml');
    }
}
