<?php

namespace Tests\Feature;

use Tests\TestCase;

class WebDevelopmentPageTest extends TestCase
{
    public function test_web_development_is_browser_engineering_not_a_catalog(): void
    {
        $response = $this->get('/services/web-development');

        $response->assertOk();
        $response->assertSee('Web Development Services | SKYEMBER', false);
        $response->assertSee('Web experiences built for the real world.', false);
        $response->assertSee('The design survives the browser', false);
        $response->assertSee('The design changes when the screen becomes real.', false);
        $response->assertSee('Space changes', false);
        $response->assertSee('Bring Web Development in when the experience has to work beyond the mockup.', false);
        $response->assertSee('The web is part of the product, not the delivery format.', false);
        $response->assertSee('Responsive implementation', false);
        $response->assertSee('Application behavior', false);
        $response->assertSee('Performance', false);
        $response->assertSee('Accessibility', false);
        $response->assertSee('Content + discoverability', false);
        $response->assertSee('One experience. Different conditions.', false);
        $response->assertSee('Fast is part of the interface.', false);
        $response->assertSee('The browser should not decide who can use the product.', false);
        $response->assertSee('Search should understand what the visitor can see.', false);
        $response->assertSee('Real web products have states.', false);
        $response->assertSee('Production frontend is more than markup.', false);
        $response->assertSee('The web experience depends on the system behind it.', false);
        $response->assertSee('Designed to survive outside the happy path.', false);
        $response->assertSee('Representative interface', false);
        $response->assertSee('Design and implementation should agree.', false);
        $response->assertSee('When the web is part of the larger product.', false);
        $response->assertSee('Sometimes the web is not the right surface.', false);
        $response->assertSee('Start with the experience the browser needs to deliver.', false);
        $response->assertSee('Have a web experience worth building properly?', false);
        $response->assertSee('See our work', false);
        $response->assertSee('href="'.route('contact').'"', false);
        $response->assertSee('href="'.route('work').'"', false);
        $response->assertSee('href="'.route('services.ui-ux-design').'"', false);
        $response->assertSee('href="'.route('services.product-engineering').'"', false);
        $response->assertSee('BreadcrumbList', false);
        $response->assertSee('"@type": "Service"', false);
        $response->assertDontSee('href="/services/mobile-development"', false);
        $response->assertDontSee('href="/services/cloud-devops"', false);
        $response->assertDontSee('LCP', false);
        $response->assertDontSee('2.5s', false);
        $response->assertDontSee('React', false);
        $response->assertDontSee('Next.js', false);
        $response->assertDontSee('99%', false);
    }

    public function test_services_hub_activates_web_explore_among_remaining_children(): void
    {
        $html = $this->get('/services')->getContent();

        $this->assertStringContainsString('href="/services/product-engineering"', $html);
        $this->assertStringContainsString('href="/services/ui-ux-design"', $html);
        $this->assertStringContainsString('href="/services/web-development"', $html);
        $this->assertStringContainsString('href="/services/mobile-development"', $html);
        $this->assertStringContainsString('href="/services/cloud-devops"', $html);
        $this->assertMatchesRegularExpression(
            '/<a[^>]*href="\/services\/web-development"[^>]*>\s*Explore service/i',
            $html,
        );
    }

    public function test_services_nav_is_current_on_web_development(): void
    {
        $this->get('/services/web-development')
            ->assertOk()
            ->assertSee('href="'.route('services').'"', false)
            ->assertSee('aria-current="page"', false);
    }
}
