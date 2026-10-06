<?php

namespace Tests\Feature;

use Tests\TestCase;

class CompanyAboutPageTest extends TestCase
{
    public function test_about_is_factual_human_profile_not_a_manifesto(): void
    {
        $response = $this->get('/company/about');

        $response->assertOk();
        $response->assertSee('About SKYEMBER | Software Company', false);
        $response->assertSee('A software company built around the work.', false);
        $response->assertSee('A technology company with a product mindset.', false);
        $response->assertSee('What we build', false);
        $response->assertSee('How we work', false);
        $response->assertSee('Custom software', false);
        $response->assertSee('Software should solve the real problem.', false);
        $response->assertSee('How the company stays close to the work.', false);
        $response->assertSee('Direct', false);
        $response->assertSee('Connected', false);
        $response->assertSee('Accountable', false);
        $response->assertSee('We work where software has to fit the business.', false);
        $response->assertSee('Growing businesses', false);
        $response->assertSee('Product teams', false);
        $response->assertSee('Organizations modernizing systems', false);
        $response->assertSee('Teams exploring intelligent automation', false);
        $response->assertSee('Clear conversations. Serious decisions.', false);
        $response->assertSee('Practical', false);
        $response->assertSee('Honest', false);
        $response->assertSee('The company is broader than any one service.', false);
        $response->assertSee('Built to become better as the company grows.', false);
        $response->assertSee('Better products', false);
        $response->assertSee('The work still says the most.', false);
        $response->assertSee('Business Operations Platform', false);
        $response->assertSee('Good work starts with being understood.', false);
        $response->assertSee('Serious about the work.', false);

        $response->assertSee('href="'.route('work').'"', false);
        $response->assertSee('href="'.route('contact').'"', false);
        $response->assertSee('href="'.route('company').'"', false);
        $response->assertSee('href="'.route('work.business-operations-platform').'"', false);
        $response->assertSee('href="'.route('services.product-engineering').'"', false);
        $response->assertSee('href="'.route('services.ui-ux-design').'"', false);
        $response->assertSee('href="'.route('services.web-development').'"', false);
        $response->assertSee('href="'.route('services.mobile-development').'"', false);
        $response->assertSee('href="'.route('services.cloud-devops').'"', false);

        $response->assertSee('BreadcrumbList', false);
        $response->assertSee('"@type": "Organization"', false);

        $response->assertDontSee('Small enough to stay close', false);
        $response->assertDontSee('The people behind the work.', false);
        $response->assertDontSee('Careers', false);
        $response->assertDontSee('Mission', false);
        $response->assertDontSee('Vision', false);
        $response->assertDontSee('Our Values', false);
        $response->assertDontSee('employees', false);
        $response->assertDontSee('founded in', false);
        $response->assertDontSee('headquarters', false);
        $response->assertDontSee('coming soon', false);
        $response->assertDontSee('ISO 27001', false);
        $response->assertDontSee('SOC 2', false);
    }

    public function test_company_explore_activates_about(): void
    {
        $html = $this->get('/company')->getContent();

        $this->assertMatchesRegularExpression(
            '/<a[^>]*href="[^"]*\/company\/about"[^>]*>\s*<h3[^>]*>About/i',
            $html,
        );
    }

    public function test_company_nav_is_current_on_about(): void
    {
        $this->get('/company/about')
            ->assertOk()
            ->assertSee('href="'.route('company').'"', false)
            ->assertSee('aria-current="page"', false);
    }
}
