<?php

namespace App\Support;

/**
 * Static blog content for the three Move Smart Plus articles.
 *
 * There is no blog admin/CMS — content lives here and the matching
 * body partial in resources/views/blogs/content/{slug}.blade.php.
 */
class Blog
{
    /**
     * All published blogs, in display order.
     */
    public static function all(): array
    {
        return [

            [
                'slug' => 'how-to-pack-fragile-items',
                'title' => 'How to Pack Fragile Items the Right Way',
                'excerpt' => 'A practical guide to packing glassware, electronics and other breakables so they survive the trip to your new home.',
                'category' => 'Packing',
                'image' => 'images/resource/blog1-1.jpg',
                'image_alt' => 'Household glassware and fragile items wrapped and packed into a moving box',
                'published_at' => '2026-09-19',
                'meta_title' => 'How to Pack Fragile Items Safely for a Move | MoveSmartPlus',
                'meta_description' => 'Learn how to pack glassware, electronics, mirrors and other fragile household items so they arrive undamaged, with tips from MoveSmartPlus.',
                'keywords' => 'how to pack fragile items, packing tips for moving, packing glassware, packing electronics for moving, safe packing Bihar',
            ],

            [
                'slug' => 'ultimate-moving-checklist',
                'title' => 'The Ultimate Checklist Before You Move',
                'excerpt' => 'A room-by-room checklist covering what to do in the weeks, days and hours before your move, so nothing gets missed.',
                'category' => 'Moving',
                'image' => 'images/resource/blog1-2.jpg',
                'image_alt' => 'A family reviewing a moving checklist while packing boxes at home',
                'published_at' => '2026-09-19',
                'meta_title' => 'The Ultimate Moving Checklist | MoveSmartPlus',
                'meta_description' => 'A practical, room-by-room moving checklist for anyone planning a home shift in Bihar or Jharkhand, from six weeks out to moving day itself.',
                'keywords' => 'moving checklist, house shifting checklist, home shifting Bihar, moving day checklist, relocation planning',
            ],

            [
                'slug' => 'best-packing-materials',
                'title' => 'The Best Packing Materials for a Safe Move',
                'excerpt' => 'What actually goes into a safe move — the right boxes, wrapping and tape for furniture, electronics and everyday household items.',
                'category' => 'Packing',
                'image' => 'images/resource/blog1-3.jpg',
                'image_alt' => 'Packing materials including cartons, bubble wrap and tape laid out before a house move',
                'published_at' => '2026-09-19',
                'meta_title' => 'Best Packing Materials for Moving Safely | MoveSmartPlus',
                'meta_description' => 'A guide to choosing the right boxes, bubble wrap, tape and padding for a safe house move, and where each material actually matters.',
                'keywords' => 'best packing materials, packing supplies for moving, moving boxes, bubble wrap for moving, packers and movers Jharkhand',
            ],

        ];
    }

    /**
     * Find a single blog by its slug.
     */
    public static function find(string $slug): ?array
    {
        foreach (self::all() as $blog) {
            if ($blog['slug'] === $slug) {
                return $blog;
            }
        }

        return null;
    }

    /**
     * The other blogs, excluding the given slug.
     */
    public static function others(string $slug): array
    {
        return array_values(array_filter(
            self::all(),
            fn ($blog) => $blog['slug'] !== $slug
        ));
    }
}
