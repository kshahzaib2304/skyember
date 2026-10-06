<?php

namespace Tests\Feature;

use Tests\TestCase;

class WorkPageTest extends TestCase
{
    public function test_work_page_is_a_curated_index(): void
    {
        $response = $this->get('/work');

        $response->assertOk();
        $response->assertSee('SKYEMBER - Work', false);
        $response->assertSee('Problems turned', false);
        $response->assertSee('into software.', false);
        $response->assertSee('Three representative systems.', false);
        $response->assertSee('Business Operations Platform', false);
        $response->assertSee('Field Service Record', false);
        $response->assertSee('Catalog Change', false);
        $response->assertSee('Additional work', false);
        $response->assertSee('Neither opens yet.', false);
        $response->assertSee('Representative project', false);
        $response->assertSee('CollectionPage', false);
        $response->assertSee('ItemList', false);
        $response->assertSee('BreadcrumbList', false);
        $response->assertSee('rel="canonical"', false);
        $response->assertSee('Start a conversation', false);
        $response->assertSee('href="'.route('contact').'"', false);
        $response->assertSee('href="/work/business-operations-platform"', false);
        $response->assertSee('Explore case study', false);
        $response->assertSee('Pharmacy / Operations', false);
    }

    public function test_work_navigation_is_live_and_keeps_the_homepage_intact(): void
    {
        $this->get('/work')
            ->assertOk()
            ->assertSee('href="'.route('work').'"', false)
            ->assertSee('aria-current="page"', false)
            ->assertSee('href="'.route('contact').'"', false)
            ->assertSee('href="'.route('solutions').'"', false)
            ->assertDontSee('href="#final-cta"', false);

        $this->get('/')
            ->assertOk()
            ->assertSee('href="'.route('work').'"', false)
            ->assertSee('href="#final-cta"', false)
            ->assertSee('href="'.route('solutions').'"', false)
            ->assertSee('href="/work/business-operations-platform"', false)
            ->assertSee('Explore case study', false);
    }

    public function test_contact_page_can_reach_work(): void
    {
        $this->get('/contact')
            ->assertOk()
            ->assertSee('href="'.route('work').'"', false);
    }
}
