<?php

namespace Tests\Feature;

use Tests\TestCase;

class SaasProductsPageTest extends TestCase
{
    public function test_saas_page_is_a_product_path_not_business_software(): void
    {
        $response = $this->get('/solutions/saas-products');

        $response->assertOk();
        $response->assertSee('SaaS Product Development Company | SKYEMBER', false);
        $response->assertSee('Turn a repeatable problem into a product people can use.', false);
        $response->assertSee('A product is more than the first release.', false);
        $response->assertSee('Choose SaaS when the product needs to become part of the user\'s routine.', false);
        $response->assertSee('What we put in place.', false);
        $response->assertSee('Product foundation', false);
        $response->assertSee('Core experience', false);
        $response->assertSee('Product operations', false);
        $response->assertSee('Product evolution', false);
        $response->assertSee('One product, many states.', false);
        $response->assertSee('Discover', false);
        $response->assertSee('A SaaS product is not a feature pile.', false);
        $response->assertSee('The foundation has to support the product, not fight it.', false);
        $response->assertSee('Start with the workflow people will return to.', false);
        $response->assertSee('Representative product', false);
        $response->assertSee('From product idea to product ownership.', false);
        $response->assertSee('Evolve', false);
        $response->assertSee('Sometimes the product should stay internal.', false);
        $response->assertSee('Have a product idea worth testing?', false);
        $response->assertSee('Project Atlas', false);
        $response->assertSee('Welcome back', false);
        $response->assertSee('Talk to SKYEMBER', false);
        $response->assertSee('See how we think', false);
        $response->assertSee('href="'.route('contact').'"', false);
        $response->assertSee('href="'.route('solutions.business-software').'"', false);
        $response->assertSee('BreadcrumbList', false);
        $response->assertSee('"@type": "Service"', false);
        $response->assertDontSee('href="/work/business-operations-platform"', false);
        $response->assertDontSee('Operations workspace', false);
        $response->assertDontSee('SO-10482', false);
        $response->assertDontSee('MRR', false);
        $response->assertDontSee('42%', false);
        $response->assertDontSee('href="/solutions/saas-products"', false);
    }

    public function test_secondary_see_how_we_think_has_no_href_yet(): void
    {
        $html = $this->get('/solutions/saas-products')->getContent();

        $this->assertStringContainsString('See how we think', $html);
        $this->assertDoesNotMatchRegularExpression(
            '/<a[^>]*>\s*See how we think/i',
            $html,
        );
    }

    public function test_solutions_hub_activates_saas_explore_without_other_children(): void
    {
        $this->get('/solutions')
            ->assertOk()
            ->assertSee('href="/solutions/saas-products"', false)
            ->assertSee('href="/solutions/business-software"', false)
            ->assertSee('Explore this solution', false)
            ->assertSee('href="/solutions/custom-platforms"', false)
            ->assertSee('href="/solutions/ai-automation"', false);
    }
}
