<?php

namespace Tests\Feature;

use Tests\TestCase;

class CompanyTechnologyPageTest extends TestCase
{
    public function test_technology_is_judgment_not_a_stack_catalogue(): void
    {
        $response = $this->get('/company/technology');

        $response->assertOk();
        $response->assertSee('Technology &amp; Engineering Approach | SKYEMBER', false);
        $response->assertSee('Technology is a decision, not an identity.', false);
        $response->assertSee('Choose the architecture for the work it has to do.', false);
        $response->assertSee('Start with the decision. Then choose the technology.', false);
        $response->assertSee('Good engineering does not start with the framework.', false);
        $response->assertSee('Choose the smallest architecture that satisfies the actual requirements.', false);
        $response->assertSee('Start simple. Add complexity when the problem requires it.', false);
        $response->assertSee('The decisions behind the system.', false);
        $response->assertSee('Domain', false);
        $response->assertSee('Evolution', false);
        $response->assertSee('Security is a property of the system, not a final checklist.', false);
        $response->assertSee('The data model often matters more than the framework.', false);
        $response->assertSee('Good systems know where one responsibility ends.', false);
        $response->assertSee('A system should be able to explain itself.', false);
        $response->assertSee('Use the technology that earns its place.', false);
        $response->assertSee('Not everything should be built.', false);
        $response->assertSee('AI is another architectural decision.', false);
        $response->assertSee('The right architecture is the one the system can live with.', false);
        $response->assertSee('Representative engineering decision', false);
        $response->assertSee('Start as a modular application.', false);
        $response->assertSee('Good decisions can survive changing tools.', false);
        $response->assertSee('Technical decisions meet delivery here.', false);
        $response->assertSee('Sometimes the best architecture is the one you already have.', false);
        $response->assertSee('Have a technical decision ahead of you?', false);
        $response->assertSee('Trade-offs are visible.', false);

        $response->assertSee('href="'.route('contact').'"', false);
        $response->assertSee('href="'.route('work').'"', false);
        $response->assertSee('href="'.route('company').'"', false);
        $response->assertSee('href="'.route('company.about').'"', false);
        $response->assertSee('href="'.route('company.process').'"', false);
        $response->assertSee('href="'.route('services.product-engineering').'"', false);
        $response->assertSee('href="'.route('services.web-development').'"', false);
        $response->assertSee('href="'.route('services.cloud-devops').'"', false);

        $response->assertSee('BreadcrumbList', false);
        $response->assertSee('"@type": "Organization"', false);
        $response->assertDontSee('"@type": "Service"', false);

        $response->assertDontSee('Laravel', false);
        $response->assertDontSee('React', false);
        $response->assertDontSee('Kubernetes', false);
        $response->assertDontSee('PostgreSQL', false);
        $response->assertDontSee('Docker', false);
        $response->assertDontSee('99.99', false);
        $response->assertDontSee('ISO 27001', false);
        $response->assertDontSee('SOC 2', false);
        $response->assertDontSee('Careers', false);
        $response->assertDontSee('AI-first', false);
    }

    public function test_company_explore_activates_technology(): void
    {
        $html = $this->get('/company')->getContent();

        $this->assertMatchesRegularExpression(
            '/<a[^>]*href="[^"]*\/company\/technology"[^>]*>\s*<h3[^>]*>Technology/i',
            $html,
        );
    }

    public function test_about_and_process_activate_technology(): void
    {
        $about = $this->get('/company/about')->getContent();
        $process = $this->get('/company/process')->getContent();

        $this->assertMatchesRegularExpression(
            '/<a[^>]*href="[^"]*\/company\/technology"[^>]*>/i',
            $about,
        );
        $this->assertMatchesRegularExpression(
            '/<a[^>]*href="[^"]*\/company\/technology"[^>]*>/i',
            $process,
        );
    }

    public function test_company_nav_is_current_on_technology(): void
    {
        $this->get('/company/technology')
            ->assertOk()
            ->assertSee('href="'.route('company').'"', false)
            ->assertSee('aria-current="page"', false);
    }
}
