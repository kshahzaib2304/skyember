<?php

namespace Tests\Feature;

use App\Insights\EssayCatalog;
use App\Support\PublicCatalog;
use Tests\TestCase;

class SiteQualityPassTest extends TestCase
{
    public function test_every_public_page_has_core_seo_and_landmarks(): void
    {
        foreach (PublicCatalog::pages() as $page) {
            $path = parse_url($page['loc'], PHP_URL_PATH) ?: '/';
            $response = $this->get($path);

            $response->assertOk();
            $response->assertSee('<title>', false);
            $response->assertSee('name="description"', false);
            $response->assertSee('rel="canonical"', false);
            $response->assertSee('property="og:title"', false);
            $response->assertSee('name="twitter:title"', false);
            $response->assertSee('Skip to content', false);
            $response->assertSee('id="main"', false);
            $response->assertSee('<h1', false);
            $response->assertDontSee('Essay forthcoming', false);
        }
    }

    public function test_sitemap_lists_the_live_public_routes(): void
    {
        $response = $this->get('/sitemap.xml');

        $response->assertOk();
        $response->assertHeader('Content-Type', 'application/xml; charset=UTF-8');

        foreach (PublicCatalog::pages() as $page) {
            $response->assertSee('<loc>'.$page['loc'].'</loc>', false);
        }

        $response->assertDontSee('/up', false);
        $response->assertDontSee('not-a-real-essay', false);
    }

    public function test_robots_keeps_open_crawl_and_points_at_the_sitemap(): void
    {
        $response = $this->get('/robots.txt');

        $response->assertOk();
        $response->assertSee('User-agent: *', false);
        $response->assertSee("Disallow:\n", false);
        $response->assertSee('Sitemap: '.url('/sitemap.xml'), false);
        $response->assertDontSee('Disallow: /', false);
    }

    public function test_unknown_urls_use_the_branded_404(): void
    {
        $response = $this->get('/this-page-does-not-exist');

        $response->assertNotFound();
        $response->assertSee('Page not found | SKYEMBER', false);
        $response->assertSee('This page is not here.', false);
        $response->assertSee('noindex, follow', false);
        $response->assertSee('href="'.url('/').'"', false);
        $response->assertSee('href="'.route('insights').'"', false);
        $response->assertSee('href="'.route('contact').'"', false);
        $response->assertDontSee('"@type": "Article"', false);
    }

    public function test_essay_pages_keep_article_schema_and_skyember_author(): void
    {
        $slug = EssayCatalog::slugs()[0];
        $response = $this->get('/insights/'.$slug);

        $response->assertOk();
        $response->assertSee('"@type": "Article"', false);
        $response->assertSee('SKYEMBER', false);
        $response->assertSee('og:type" content="article"', false);
    }

    public function test_insights_index_still_has_no_article_schema(): void
    {
        $this->get('/insights')
            ->assertOk()
            ->assertDontSee('"@type": "Article"', false)
            ->assertSee('BreadcrumbList', false);
    }
}
