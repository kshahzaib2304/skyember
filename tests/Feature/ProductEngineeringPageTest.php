<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProductEngineeringPageTest extends TestCase
{
    public function test_product_engineering_is_a_connected_practice(): void
    {
        $response = $this->get('/services/product-engineering');

        $response->assertOk();
        $response->assertSee('Product Engineering Services | SKYEMBER', false);
        $response->assertSee('From product intent to production software.', false);
        $response->assertSee('The hardest part is the distance between an idea and software people can rely on.', false);
        $response->assertSee('Intent gets lost', false);
        $response->assertSee('Bring Product Engineering in when the product needs to become real.', false);
        $response->assertSee('The disciplines stay connected.', false);
        $response->assertSee('Product direction', false);
        $response->assertSee('Experience', false);
        $response->assertSee('Engineering', false);
        $response->assertSee('Quality + delivery', false);
        $response->assertSee('One product. One connected engineering effort.', false);
        $response->assertSee('Built beyond the happy path.', false);
        $response->assertSee('Domain', false);
        $response->assertSee('State', false);
        $response->assertSee('Data', false);
        $response->assertSee('Integration', false);
        $response->assertSee('The interface is part of the engineering.', false);
        $response->assertSee('Ready', false);
        $response->assertSee('Loading', false);
        $response->assertSee('The system behind the interface has to make the experience possible.', false);
        $response->assertSee('Confidence is designed into the delivery.', false);
        $response->assertSee('Technology should serve the product.', false);
        $response->assertSee('See one system where product, experience, and engineering meet.', false);
        $response->assertSee('SO-10482', false);
        $response->assertSee('You may not need the full discipline.', false);
        $response->assertSee('UI/UX Design', false);
        $response->assertSee('Have a product that needs to become real?', false);
        $response->assertSee('See our work', false);
        $response->assertSee('Explore the system', false);
        $response->assertSee('href="'.route('contact').'"', false);
        $response->assertSee('href="'.route('work').'"', false);
        $response->assertSee('href="'.route('work.business-operations-platform').'"', false);
        $response->assertSee('BreadcrumbList', false);
        $response->assertSee('"@type": "Service"', false);
        $response->assertSee('href="/services/ui-ux-design"', false);
        $response->assertSee('href="/services/web-development"', false);
        $response->assertSee('href="/services/mobile-development"', false);
        $response->assertSee('href="/services/cloud-devops"', false);
        $response->assertDontSee('99.99%', false);
        $response->assertDontSee('React', false);
        $response->assertDontSee('Laravel', false);
        $response->assertDontSee('Kubernetes', false);
        $response->assertDontSee('href="/services/product-engineering"', false);
    }

    public function test_services_hub_keeps_product_engineering_explore_live(): void
    {
        $html = $this->get('/services')->getContent();

        $this->assertStringContainsString('href="/services/product-engineering"', $html);
        $this->assertStringContainsString('href="/services/ui-ux-design"', $html);
        $this->assertStringContainsString('href="/services/web-development"', $html);
        $this->assertStringContainsString('href="/services/mobile-development"', $html);
        $this->assertStringContainsString('href="/services/cloud-devops"', $html);
        $this->assertMatchesRegularExpression(
            '/<a[^>]*href="\/services\/product-engineering"[^>]*>\s*Explore service/i',
            $html,
        );
    }

    public function test_services_nav_is_current_on_product_engineering(): void
    {
        $this->get('/services/product-engineering')
            ->assertOk()
            ->assertSee('href="'.route('services').'"', false)
            ->assertSee('aria-current="page"', false);
    }
}
