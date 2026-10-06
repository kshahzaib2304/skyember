<?php

namespace Tests\Feature;

use Tests\TestCase;

class BusinessSoftwarePageTest extends TestCase
{
    public function test_business_software_page_explains_the_path(): void
    {
        $response = $this->get('/solutions/business-software');

        $response->assertOk();
        $response->assertSee('Custom Business Software Development | SKYEMBER', false);
        $response->assertSee('Business software, shaped around the way your business runs.', false);
        $response->assertSee('Replace disconnected spreadsheets', false);
        $response->assertSee('Talk to SKYEMBER', false);
        $response->assertSee('See representative system', false);
        $response->assertSee('When the business outgrows the tools around it.', false);
        $response->assertSee('Information is scattered', false);
        $response->assertSee('Choose business software when the workflow itself is the problem.', false);
        $response->assertSee('What we put in place.', false);
        $response->assertSee('Operations', false);
        $response->assertSee('Inventory &amp; assets', false);
        $response->assertSee('Commercial &amp; finance', false);
        $response->assertSee('Management &amp; control', false);
        $response->assertSee('Connected records, not disconnected tools.', false);
        $response->assertSee('The software follows the rules of the business.', false);
        $response->assertSee('See one workflow in practice.', false);
        $response->assertSee('We start with the workflow, not the software.', false);
        $response->assertSee('Sometimes the answer isn\'t custom software.', false);
        $response->assertSee('Have a business workflow worth improving?', false);
        $response->assertSee('Operations workspace', false);
        $response->assertSee('href="'.route('contact').'"', false);
        $response->assertSee('href="'.route('work.business-operations-platform').'"', false);
        $response->assertSee('BreadcrumbList', false);
        $response->assertSee('"@type": "Service"', false);
        $response->assertSee('Custom business software development', false);
        $response->assertDontSee('aggregateRating', false);
        $response->assertDontSee('42%', false);
        $response->assertDontSee('SO-10482', false);
        $response->assertDontSee('href="/solutions/saas-products"', false);
    }

    public function test_solutions_hub_activates_only_business_software_explore(): void
    {
        $this->get('/solutions')
            ->assertOk()
            ->assertSee('href="/solutions/business-software"', false)
            ->assertSee('Explore this solution', false)
            ->assertSee('"url": "'.url('/solutions/business-software').'"', false)
            ->assertSee('href="/solutions/saas-products"', false)
            ->assertSee('href="/solutions/custom-platforms"', false)
            ->assertSee('href="/solutions/ai-automation"', false);
    }

    public function test_solutions_nav_is_current_on_the_deep_page(): void
    {
        $this->get('/solutions/business-software')
            ->assertOk()
            ->assertSee('href="'.route('solutions').'"', false)
            ->assertSee('aria-current="page"', false)
            ->assertDontSee('href="#final-cta"', false);
    }
}
