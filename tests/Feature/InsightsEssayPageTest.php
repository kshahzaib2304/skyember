<?php

namespace Tests\Feature;

use App\Insights\EssayCatalog;
use Tests\TestCase;

class InsightsEssayPageTest extends TestCase
{
    public function test_each_genuine_essay_is_reachable(): void
    {
        foreach (EssayCatalog::slugs() as $slug) {
            $essay = EssayCatalog::find($slug);
            $this->assertNotNull($essay);

            $response = $this->get('/insights/'.$slug);
            $response->assertOk();
            $response->assertSee($essay['seo_title'], false);
            $response->assertSee($essay['title'], false);
            $response->assertSee($essay['category'], false);
            $response->assertSee('SKYEMBER', false);
            $response->assertSee('6 October 2026', false);
            $response->assertSee('Article', false);
            $response->assertSee('BreadcrumbList', false);
            $response->assertSee('href="'.route('contact').'"', false);
            $response->assertSee('href="'.route($essay['cta_route']).'"', false);
            $response->assertSee('og:type" content="article"', false);
            $response->assertDontSee('Blog', false);
            $response->assertDontSee('99.9', false);
        }
    }

    public function test_unknown_slug_returns_404(): void
    {
        $this->get('/insights/not-a-real-essay')->assertNotFound();
        $this->get('/insights/the-workflow-is-the-product/extra')->assertNotFound();
    }

    public function test_related_essays_are_the_other_three(): void
    {
        $html = $this->get('/insights/the-workflow-is-the-product')->assertOk()->getContent();

        $this->assertStringContainsString('Complexity Should Have to Earn Its Place', $html);
        $this->assertStringContainsString('Designing the State After the Happy Path', $html);
        $this->assertStringContainsString('When an AI Workflow Should Stop and Ask', $html);
        $this->assertStringContainsString('href="'.route('insights.show', 'complexity-should-have-to-earn-its-place').'"', $html);
    }

    public function test_insights_nav_is_current_on_essay(): void
    {
        $this->get('/insights/the-workflow-is-the-product')
            ->assertOk()
            ->assertSee('href="'.route('insights').'"', false)
            ->assertSee('aria-current="page"', false);
    }
}
