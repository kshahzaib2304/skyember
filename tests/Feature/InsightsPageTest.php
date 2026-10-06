<?php

namespace Tests\Feature;

use Tests\TestCase;

class InsightsPageTest extends TestCase
{
    public function test_insights_is_editorial_intelligence_not_a_blog(): void
    {
        $response = $this->get('/insights');

        $response->assertOk();
        $response->assertSee('Insights on Software, Product &amp; Engineering | SKYEMBER', false);
        $response->assertSee('SKYEMBER insights on software engineering, product development, UX design, AI automation, architecture, and building systems that last.', false);
        $response->assertSee('Thinking clearly about software.', false);
        $response->assertSee('Perspectives on product, design, engineering, AI, and the systems that make software useful.', false);
        $response->assertSee('Featured thesis', false);
        $response->assertSee('The workflow is the product', false);
        $response->assertSee('What we\'re thinking about', false);
        $response->assertSee('Engineering', false);
        $response->assertSee('Product', false);
        $response->assertSee('Design', false);
        $response->assertSee('AI + Systems', false);
        $response->assertSee('Complexity should have to earn its place', false);
        $response->assertSee('Designing the state after the happy path', false);
        $response->assertSee('When an AI workflow should stop and ask', false);
        $response->assertSee('Read the essay', false);
        $response->assertSee('See a problem you recognize?', false);
        $response->assertSee('Start a conversation', false);

        $response->assertSee('href="'.route('contact').'"', false);
        $response->assertSee('href="'.route('work').'"', false);
        $response->assertSee('href="'.route('insights').'"', false);
        $response->assertSee('href="'.route('insights.show', 'the-workflow-is-the-product').'"', false);
        $response->assertSee('href="'.route('insights.show', 'complexity-should-have-to-earn-its-place').'"', false);
        $response->assertSee('href="'.route('insights.show', 'designing-the-state-after-the-happy-path').'"', false);
        $response->assertSee('href="'.route('insights.show', 'when-an-ai-workflow-should-stop-and-ask').'"', false);

        $response->assertSee('BreadcrumbList', false);
        $response->assertDontSee('"@type": "Article"', false);
        $response->assertDontSee('"@type": "FAQPage"', false);

        $response->assertDontSee('Blog', false);
        $response->assertDontSee('Essay forthcoming', false);
        $response->assertDontSee('newsletter', false);
        $response->assertDontSee('Subscribe', false);
    }

    public function test_insights_nav_is_live_and_current(): void
    {
        $this->get('/insights')
            ->assertOk()
            ->assertSee('href="'.route('insights').'"', false)
            ->assertSee('aria-current="page"', false);

        $home = $this->get('/')->assertOk()->getContent();

        $this->assertMatchesRegularExpression(
            '/href="[^"]*\/insights"[^>]*(?!aria-disabled)[^>]*>\s*Insights/i',
            $home,
        );
    }
}
