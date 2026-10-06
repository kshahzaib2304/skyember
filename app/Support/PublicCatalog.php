<?php

namespace App\Support;

use App\Insights\EssayCatalog;
use Illuminate\Support\Carbon;

class PublicCatalog
{
    /**
     * Live public GET pages, in IA order. Sitemap and integrity tests share this list.
     *
     * @return list<array{loc: string, lastmod?: string, changefreq: string, priority: string}>
     */
    public static function pages(): array
    {
        $pages = [
            self::page('home', 'weekly', '1.0'),
            self::page('solutions', 'monthly', '0.9'),
            self::page('solutions.business-software', 'monthly', '0.8'),
            self::page('solutions.saas-products', 'monthly', '0.8'),
            self::page('solutions.custom-platforms', 'monthly', '0.8'),
            self::page('solutions.ai-automation', 'monthly', '0.8'),
            self::page('services', 'monthly', '0.9'),
            self::page('services.product-engineering', 'monthly', '0.8'),
            self::page('services.ui-ux-design', 'monthly', '0.8'),
            self::page('services.web-development', 'monthly', '0.8'),
            self::page('services.mobile-development', 'monthly', '0.8'),
            self::page('services.cloud-devops', 'monthly', '0.8'),
            self::page('work', 'monthly', '0.9'),
            self::page('work.business-operations-platform', 'monthly', '0.8'),
            self::page('company', 'monthly', '0.8'),
            self::page('company.about', 'monthly', '0.7'),
            self::page('company.process', 'monthly', '0.7'),
            self::page('company.technology', 'monthly', '0.7'),
            self::page('insights', 'weekly', '0.8'),
        ];

        foreach (EssayCatalog::records() as $essay) {
            $pages[] = [
                'loc' => route('insights.show', $essay['slug']),
                'lastmod' => Carbon::parse($essay['published_at'])->toDateString(),
                'changefreq' => 'monthly',
                'priority' => '0.7',
            ];
        }

        $pages[] = self::page('contact', 'yearly', '0.6');

        return $pages;
    }

    /**
     * @return list<string>
     */
    public static function paths(): array
    {
        return array_map(
            fn (array $page): string => (string) parse_url($page['loc'], PHP_URL_PATH),
            self::pages(),
        );
    }

    /**
     * @return array{loc: string, changefreq: string, priority: string}
     */
    private static function page(string $name, string $changefreq, string $priority): array
    {
        return [
            'loc' => route($name),
            'changefreq' => $changefreq,
            'priority' => $priority,
        ];
    }
}
