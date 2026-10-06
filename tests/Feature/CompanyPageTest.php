<?php

namespace Tests\Feature;

use Tests\TestCase;

class CompanyPageTest extends TestCase
{
    public function test_company_is_principle_led_not_a_service_page(): void
    {
        $response = $this->get('/company');

        $response->assertOk();
        $response->assertSee('About SKYEMBER | Software Company &amp; Product Engineering', false);
        $response->assertSee('We build software with a long-term view.', false);
        $response->assertSee('Software should fit the work, not force the work to fit the software.', false);
        $response->assertSee('What we believe about software.', false);
        $response->assertSee('Start with the problem', false);
        $response->assertSee('Make complexity understandable', false);
        $response->assertSee('Prove the important parts', false);
        $response->assertSee('Build for what comes next', false);
        $response->assertSee('Look at the whole system.', false);
        $response->assertSee('The problem', false);
        $response->assertSee('The system', false);
        $response->assertSee('Different disciplines. Shared responsibility.', false);
        $response->assertSee('We keep the work connected.', false);
        $response->assertSee('Stay close to the problem', false);
        $response->assertSee('Make decisions visible', false);
        $response->assertSee('Leave the system better than we found it', false);
        $response->assertSee('Serious about the work. Easy to work with.', false);
        $response->assertSee("We don't build complexity for the sake of it.", false);
        $response->assertSee('No technology chosen just because it is fashionable.', false);
        $response->assertSee('The best description of us is still the work.', false);
        $response->assertSee('One example of how we think', false);
        $response->assertSee('Business Operations Platform', false);
        $response->assertSee('Explore SKYEMBER', false);
        $response->assertSee("Let's build something that matters.", false);
        $response->assertSee('Different disciplines. One standard of work.', false);

        $response->assertSee('href="'.route('work').'"', false);
        $response->assertSee('href="'.route('contact').'"', false);
        $response->assertSee('href="'.route('work.business-operations-platform').'"', false);
        $response->assertSee('href="'.route('services.product-engineering').'"', false);
        $response->assertSee('href="'.route('services.ui-ux-design').'"', false);
        $response->assertSee('href="'.route('services.web-development').'"', false);
        $response->assertSee('href="'.route('services.mobile-development').'"', false);
        $response->assertSee('href="'.route('services.cloud-devops').'"', false);

        $response->assertSee('BreadcrumbList', false);
        $response->assertSee('"@type": "WebSite"', false);
        $response->assertSee('"@type": "Organization"', false);

        $response->assertDontSee('Careers', false);
        $response->assertDontSee('Mission', false);
        $response->assertDontSee('Vision', false);
        $response->assertDontSee('Our Values', false);
        $response->assertDontSee('employees', false);
        $response->assertDontSee('founded in', false);
        $response->assertDontSee('headquarters', false);
        $response->assertDontSee('Fortune', false);
        $response->assertDontSee('ISO 27001', false);
        $response->assertDontSee('SOC 2', false);
    }

    public function test_company_nav_is_live_and_current(): void
    {
        $this->get('/company')
            ->assertOk()
            ->assertSee('href="'.route('company').'"', false)
            ->assertSee('aria-current="page"', false)
            ->assertDontSee('aria-disabled="true"', false);
    }

    public function test_company_nav_is_linked_from_homepage(): void
    {
        $html = $this->get('/')->getContent();

        $this->assertStringContainsString('href="'.route('company').'"', $html);
        $this->assertStringNotContainsString('aria-disabled="true"', $html);
    }
}
