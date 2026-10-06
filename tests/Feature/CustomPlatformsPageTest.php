<?php

namespace Tests\Feature;

use Tests\TestCase;

class CustomPlatformsPageTest extends TestCase
{
    public function test_custom_platforms_page_is_a_connected_foundation_path(): void
    {
        $response = $this->get('/solutions/custom-platforms');

        $response->assertOk();
        $response->assertSee('Custom Platform Development | SKYEMBER', false);
        $response->assertSee('One platform for the work between systems.', false);
        $response->assertSee('The difficult part is what happens between the systems.', false);
        $response->assertSee('Different users need different experiences', false);
        $response->assertSee('Choose a custom platform when the system is bigger than one screen.', false);
        $response->assertSee('A platform is a foundation for experiences.', false);
        $response->assertSee('Shared domain', false);
        $response->assertSee('Connected experiences', false);
        $response->assertSee('Workflow + rules', false);
        $response->assertSee('Extension points', false);
        $response->assertSee('Same foundation, different experience.', false);
        $response->assertSee('Customer', false);
        $response->assertSee('Staff', false);
        $response->assertSee('Partner', false);
        $response->assertSee('A platform is not several applications glued together.', false);
        $response->assertSee('Complex underneath. Clear on the surface.', false);
        $response->assertSee('Boundaries', false);
        $response->assertSee('Ownership', false);
        $response->assertSee('Consistency', false);
        $response->assertSee('Extensibility', false);
        $response->assertSee('Built for the people who operate the system.', false);
        $response->assertSee('Identity', false);
        $response->assertSee('Permissions', false);
        $response->assertSee('Auditability', false);
        $response->assertSee('Reliability', false);
        $response->assertSee('Administration', false);
        $response->assertSee('Evolution', false);
        $response->assertSee('One foundation. Several ways to work.', false);
        $response->assertSee('Representative platform', false);
        $response->assertSee('Start with the system, not the screens.', false);
        $response->assertSee('Map', false);
        $response->assertSee('Model', false);
        $response->assertSee('Shape', false);
        $response->assertSee('Engineer', false);
        $response->assertSee('Evolve', false);
        $response->assertSee('Sometimes a platform is more than you need.', false);
        $response->assertSee('Have a system that no longer fits in separate tools?', false);
        $response->assertSee('Talk to SKYEMBER', false);
        $response->assertSee('See how we approach complex systems', false);
        $response->assertSee('Request RQ-1094', false);
        $response->assertSee('Order OR-2841', false);
        $response->assertSee('href="'.route('contact').'"', false);
        $response->assertSee('BreadcrumbList', false);
        $response->assertSee('"@type": "Service"', false);
        $response->assertDontSee('href="/work/business-operations-platform"', false);
        $response->assertDontSee('Operations workspace', false);
        $response->assertDontSee('SO-10482', false);
        $response->assertDontSee('Project Atlas', false);
        $response->assertDontSee('Welcome back', false);
        $response->assertDontSee('Kubernetes', false);
        $response->assertDontSee('GraphQL', false);
        $response->assertDontSee('uptime', false);
        $response->assertDontSee('href="/solutions/custom-platforms"', false);
    }

    public function test_secondary_complex_systems_has_no_href_yet(): void
    {
        $html = $this->get('/solutions/custom-platforms')->getContent();

        $this->assertStringContainsString('See how we approach complex systems', $html);
        $this->assertDoesNotMatchRegularExpression(
            '/<a[^>]*>\s*See how we approach complex systems/i',
            $html,
        );
    }

    public function test_solutions_hub_activates_custom_platforms_explore_without_ai(): void
    {
        $this->get('/solutions')
            ->assertOk()
            ->assertSee('href="/solutions/custom-platforms"', false)
            ->assertSee('href="/solutions/business-software"', false)
            ->assertSee('href="/solutions/saas-products"', false)
            ->assertSee('Explore this solution', false)
            ->assertSee('Several teams, channels, or experiences need one shared foundation', false)
            ->assertSee('href="/solutions/ai-automation"', false);
    }
}
