<?php

namespace Tests\Feature;

use Tests\TestCase;

class SolutionsPageTest extends TestCase
{
    public function test_solutions_page_is_a_decision_index(): void
    {
        $response = $this->get('/solutions');

        $response->assertOk();
        $response->assertSee('SKYEMBER - Solutions', false);
        $response->assertSee('Software for the decision', false);
        $response->assertSee('in front of you.', false);
        $response->assertSee('What are you trying to put in place?', false);
        $response->assertSee('Business software', false);
        $response->assertSee('SaaS products', false);
        $response->assertSee('Custom platforms', false);
        $response->assertSee('AI &amp; automation', false);
        $response->assertSee('Choose this when', false);
        $response->assertSee('What we put in place', false);
        $response->assertSee('Featured path', false);
        $response->assertSee('Additional paths', false);
        $response->assertSee('Not sure which path fits?', false);
        $response->assertSee('See how we think', false);
        $response->assertSee('href="'.route('work.business-operations-platform').'"', false);
        $response->assertSee('href="'.route('contact').'"', false);
        $response->assertSee('CollectionPage', false);
        $response->assertSee('ItemList', false);
        $response->assertSee('BreadcrumbList', false);
        $response->assertSee('under', false);
        $response->assertSee('href="'.route('services').'"', false);
        $response->assertSee('href="/solutions/business-software"', false);
        $response->assertSee('href="/solutions/saas-products"', false);
        $response->assertSee('href="/solutions/custom-platforms"', false);
        $response->assertSee('href="/solutions/ai-automation"', false);
        $response->assertSee('Explore this solution', false);
    }

    public function test_solutions_nav_is_live_and_homepage_capabilities_section_remains(): void
    {
        $this->get('/solutions')
            ->assertOk()
            ->assertSee('href="'.route('solutions').'"', false)
            ->assertSee('aria-current="page"', false)
            ->assertSee('href="'.route('contact').'"', false)
            ->assertDontSee('href="#final-cta"', false);

        $this->get('/')
            ->assertOk()
            ->assertSee('href="'.route('solutions').'"', false)
            ->assertSee('id="capabilities"', false)
            ->assertSee('Software shaped around how your business actually works.', false)
            ->assertSee('href="#final-cta"', false)
            ->assertDontSee('href="#capabilities"', false);
    }

    public function test_other_pages_point_solutions_at_the_hub(): void
    {
        $this->get('/work')
            ->assertOk()
            ->assertSee('href="'.route('solutions').'"', false)
            ->assertDontSee('href="'.url('/#capabilities').'"', false);

        $this->get('/contact')
            ->assertOk()
            ->assertSee('href="'.route('solutions').'"', false);

        $this->get('/work/business-operations-platform')
            ->assertOk()
            ->assertSee('href="'.route('solutions').'"', false);
    }
}
