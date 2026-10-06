<?php

namespace Tests\Feature;

use Tests\TestCase;

class CloudDevopsPageTest extends TestCase
{
    public function test_cloud_devops_is_production_reliability_not_a_logo_wall(): void
    {
        $response = $this->get('/services/cloud-devops');

        $response->assertOk();
        $response->assertSee('Cloud &amp; DevOps Services | SKYEMBER', false);
        $response->assertSee('From commit to production, with confidence.', false);
        $response->assertSee('One change, end to end', false);
        $response->assertSee('Production is where every hidden assumption becomes real.', false);
        $response->assertSee('Environments drift', false);
        $response->assertSee('Bring Cloud &amp; DevOps in when production needs to become predictable.', false);
        $response->assertSee('A production system that can be understood and changed.', false);
        $response->assertSee('Cloud foundation', false);
        $response->assertSee('Infrastructure as code', false);
        $response->assertSee('Delivery automation', false);
        $response->assertSee('Observability', false);
        $response->assertSee('Reliability + recovery', false);
        $response->assertSee('A release should leave a trail.', false);
        $response->assertSee('The infrastructure should reflect what the software needs.', false);
        $response->assertSee('Security belongs in the delivery path.', false);
        $response->assertSee('Make the safe path the easy path.', false);
        $response->assertSee('The deployment is only half the story.', false);
        $response->assertSee('Design for the day something fails.', false);
        $response->assertSee('From release to runtime, nothing important should disappear.', false);
        $response->assertSee('Representative system', false);
        $response->assertSee('Production starts with the software being built.', false);
        $response->assertSee('The production environment shapes the experience.', false);
        $response->assertSee('Sometimes the existing platform is enough.', false);
        $response->assertSee('Start with how the software needs to live.', false);
        $response->assertSee('Need a production environment you can trust?', false);
        $response->assertSee('See our work', false);
        $response->assertSee('href="'.route('contact').'"', false);
        $response->assertSee('href="'.route('work').'"', false);
        $response->assertSee('href="'.route('services.product-engineering').'"', false);
        $response->assertSee('href="'.route('services.web-development').'"', false);
        $response->assertSee('BreadcrumbList', false);
        $response->assertSee('"@type": "Service"', false);
        $response->assertDontSee('Kubernetes', false);
        $response->assertDontSee('Terraform', false);
        $response->assertDontSee('99.99', false);
        $response->assertDontSee('24/7', false);
        $response->assertDontSee('ISO 27001', false);
        $response->assertDontSee('SOC 2', false);
    }

    public function test_services_hub_activates_cloud_explore(): void
    {
        $html = $this->get('/services')->getContent();

        $this->assertStringContainsString('href="/services/product-engineering"', $html);
        $this->assertStringContainsString('href="/services/ui-ux-design"', $html);
        $this->assertStringContainsString('href="/services/web-development"', $html);
        $this->assertStringContainsString('href="/services/mobile-development"', $html);
        $this->assertStringContainsString('href="/services/cloud-devops"', $html);
        $this->assertMatchesRegularExpression(
            '/<a[^>]*href="\/services\/cloud-devops"[^>]*>\s*Explore service/i',
            $html,
        );
    }

    public function test_services_nav_is_current_on_cloud_devops(): void
    {
        $this->get('/services/cloud-devops')
            ->assertOk()
            ->assertSee('href="'.route('services').'"', false)
            ->assertSee('aria-current="page"', false);
    }
}
