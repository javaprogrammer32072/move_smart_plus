<?php

namespace App\Http\Controllers;

use App\Support\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Blog listing page.
     */
    public function index(Request $request)
    {
        $blogs = Blog::all();

        $seo = [
            'title' => 'Moving & Packing Tips | MoveSmartPlus Blog',

            'description' => 'Practical moving and packing guides from MoveSmartPlus, covering fragile item packing, moving checklists and packing materials for customers in Bihar and Jharkhand.',

            'keywords' => 'moving tips Bihar, packing tips Jharkhand, house shifting checklist, packers and movers blog',

            'canonical' => route('blogs.index'),

            'robots' => 'index, follow',

            'og_title' => 'Moving & Packing Tips | MoveSmartPlus Blog',

            'og_description' => 'Practical moving and packing guides from MoveSmartPlus for customers in Bihar and Jharkhand.',

            'og_image' => public_url('images/resource/blog1-1.jpg'),

            'og_url' => route('blogs.index'),

            'twitter_title' => 'Moving & Packing Tips | MoveSmartPlus Blog',

            'twitter_description' => 'Practical moving and packing guides from MoveSmartPlus.',

            'twitter_image' => public_url('images/resource/blog1-1.jpg'),
        ];

        return view('blogs.index', compact('seo', 'blogs'));
    }

    /**
     * Single blog article.
     */
    public function show(string $slug)
    {
        $blog = Blog::find($slug);

        abort_if(! $blog, 404);

        $otherBlogs = Blog::others($slug);

        $seo = [
            'title' => $blog['meta_title'],

            'description' => $blog['meta_description'],

            'keywords' => $blog['keywords'],

            'canonical' => route('blogs.show', $blog['slug']),

            'robots' => 'index, follow',

            'og_title' => $blog['meta_title'],

            'og_description' => $blog['meta_description'],

            'og_image' => public_url($blog['image']),

            'og_url' => route('blogs.show', $blog['slug']),

            'og_type' => 'article',

            'article_published_time' => $blog['published_at'],

            'article_modified_time' => $blog['published_at'],

            'twitter_title' => $blog['meta_title'],

            'twitter_description' => $blog['meta_description'],

            'twitter_image' => public_url($blog['image']),
        ];

        return view('blogs.show', compact('seo', 'blog', 'otherBlogs'));
    }
}
