<?php

namespace Tests\Feature;

use Tests\TestCase;

class ServicesPageTest extends TestCase
{
    public function test_services_page_is_an_engineering_practice(): void
    {
        $response = $this->get('/services');

        $response->assertOk();
        $response->assertSee('Software Development Services | SKYEMBER', false);
        $response->assertSee('The disciplines behind software that works.', false);
        $response->assertSee('One system. The disciplines it needs.', false);
        $response->assertSee('01 / Featured', false);
        $response->assertSee('Product Engineering', false);
        $response->assertSee('From product intent to production software.', false);
        $response->assertSee('Other disciplines', false);
        $response->assertSee('UI/UX Design', false);
        $response->assertSee('Web Development', false);
        $response->assertSee('Mobile Development', false);
        $response->assertSee('Cloud &amp; DevOps', false);
        $response->assertSee('The disciplines change. The system stays one.', false);
        $response->assertSee('What each discipline changes.', false);
        $response->assertSee('Bring us in where the product needs more than a specification.', false);
        $response->assertSee('Specialist when it matters. Integrated when it counts.', false);
        $response->assertSee('See the work behind the disciplines.', false);
        $response->assertSee('Business Operations Platform', false);
        $response->assertSee('Product · UX · Engineering · Web application', false);
        $response->assertSee('Not every project needs every discipline.', false);
        $response->assertSee('Know what needs to be built?', false);
        $response->assertSee('Explore our work', false);
        $response->assertSee('Explore service', false);
        $response->assertSee('Explore the work', false);
        $response->assertSee('href="'.route('contact').'"', false);
        $response->assertSee('href="'.route('work').'"', false);
        $response->assertSee('href="'.route('work.business-operations-platform').'"', false);
        $response->assertSee('BreadcrumbList', false);
        $response->assertSee('"@type": "Service"', false);
        $response->assertSee('href="/services/product-engineering"', false);
        $response->assertSee('href="/services/ui-ux-design"', false);
        $response->assertSee('href="/services/web-development"', false);
        $response->assertSee('href="/services/mobile-development"', false);
        $response->assertSee('href="/services/cloud-devops"', false);
        $response->assertDontSee('AI Agent', false);
        $response->assertDontSee('Machine Learning', false);
        $response->assertDontSee('certification', false);
        $response->assertDontSee('42%', false);
    }

    public function test_featured_explore_service_links_when_route_exists(): void
    {
        $html = $this->get('/services')->getContent();

        $this->assertMatchesRegularExpression(
            '/<a[^>]*href="\/services\/product-engineering"[^>]*>\s*Explore service/i',
            $html,
        );
    }

    public function test_services_nav_is_live(): void
    {
        $this->get('/services')
            ->assertOk()
            ->assertSee('href="'.route('services').'"', false)
            ->assertSee('aria-current="page"', false);

        $this->get('/')
            ->assertOk()
            ->assertSee('href="'.route('services').'"', false);
    }

    public function test_solutions_delivery_note_links_to_services(): void
    {
        $this->get('/solutions')
            ->assertOk()
            ->assertSee('href="'.route('services').'"', false)
            ->assertSee('under', false);
    }
}
