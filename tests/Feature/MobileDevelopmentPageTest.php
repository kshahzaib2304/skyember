<?php

namespace Tests\Feature;

use Tests\TestCase;

class MobileDevelopmentPageTest extends TestCase
{
    public function test_mobile_development_is_the_moment_of_use_not_a_phone_catalog(): void
    {
        $response = $this->get('/services/mobile-development');

        $response->assertOk();
        $response->assertSee('Mobile App Development Services | SKYEMBER', false);
        $response->assertSee('Software built for the moment it is used.', false);
        $response->assertSee('A phone changes the conditions of the work.', false);
        $response->assertSee('Attention is fragmented', false);
        $response->assertSee('Bring Mobile Development in when the work needs to leave the desktop.', false);
        $response->assertSee('Mobile is a product surface, not a smaller viewport.', false);
        $response->assertSee('Platform-native experience', false);
        $response->assertSee('Touch + navigation', false);
        $response->assertSee('Device capabilities', false);
        $response->assertSee('Offline + sync', false);
        $response->assertSee('Lifecycle + release', false);
        $response->assertSee('Design for the moment, not the screen.', false);
        $response->assertSee('One product. Platform-aware experiences.', false);
        $response->assertSee('The app is more than its first screen.', false);
        $response->assertSee('Performance is felt in the hand.', false);
        $response->assertSee('The platform already gives people ways to interact. Use them.', false);
        $response->assertSee('Design on devices, not just in a browser tab.', false);
        $response->assertSee('One task, designed for the hand.', false);
        $response->assertSee('Representative mobile interface', false);
        $response->assertSee('The interaction model comes before the platform code.', false);
        $response->assertSee('Mobile is part of the product, not a separate island.', false);
        $response->assertSee('Sometimes mobile complements the web. Sometimes it replaces it.', false);
        $response->assertSee('Sometimes an app isn\'t the right answer.', false);
        $response->assertSee('Start with the moment of use.', false);
        $response->assertSee('Have a task that belongs in the hand?', false);
        $response->assertSee('See our work', false);
        $response->assertSee('href="'.route('contact').'"', false);
        $response->assertSee('href="'.route('work').'"', false);
        $response->assertSee('href="'.route('services.ui-ux-design').'"', false);
        $response->assertSee('href="'.route('services.product-engineering').'"', false);
        $response->assertSee('href="'.route('services.web-development').'"', false);
        $response->assertSee('BreadcrumbList', false);
        $response->assertSee('"@type": "Service"', false);
        $response->assertDontSee('href="/services/cloud-devops"', false);
        $response->assertDontSee('4.9', false);
        $response->assertDontSee('App Store', false);
        $response->assertDontSee('React Native', false);
        $response->assertDontSee('Flutter', false);
        $response->assertDontSee('downloads', false);
    }

    public function test_services_hub_activates_mobile_explore_among_remaining_children(): void
    {
        $html = $this->get('/services')->getContent();

        $this->assertStringContainsString('href="/services/product-engineering"', $html);
        $this->assertStringContainsString('href="/services/ui-ux-design"', $html);
        $this->assertStringContainsString('href="/services/web-development"', $html);
        $this->assertStringContainsString('href="/services/mobile-development"', $html);
        $this->assertStringContainsString('href="/services/cloud-devops"', $html);
        $this->assertMatchesRegularExpression(
            '/<a[^>]*href="\/services\/mobile-development"[^>]*>\s*Explore service/i',
            $html,
        );
    }

    public function test_services_nav_is_current_on_mobile_development(): void
    {
        $this->get('/services/mobile-development')
            ->assertOk()
            ->assertSee('href="'.route('services').'"', false)
            ->assertSee('aria-current="page"', false);
    }
}
