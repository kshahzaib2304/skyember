<?php

namespace Tests\Feature;

use Tests\TestCase;

class CompanyProcessPageTest extends TestCase
{
    public function test_process_is_engagement_transparency_not_homepage_methodology(): void
    {
        $response = $this->get('/company/process');

        $response->assertOk();
        $response->assertSee('Our Software Development Process | SKYEMBER', false);
        $response->assertSee('Good engagements make the work clearer.', false);
        $response->assertSee('It starts with a problem, not a specification.', false);
        $response->assertSee('What is happening today?', false);
        $response->assertSee('Understand the situation before choosing the solution.', false);
        $response->assertSee('A clearer picture of the problem and the decisions that matter.', false);
        $response->assertSee('Turn a broad problem into a shape worth building.', false);
        $response->assertSee('Make the important parts tangible early.', false);
        $response->assertSee('Test the decisions before the system carries them.', false);
        $response->assertSee('A decision becomes more certain.', false);
        $response->assertSee('Release is a handoff, not a finish line.', false);
        $response->assertSee("The relationship can end. The product doesn't have to.", false);
        $response->assertSee('The work gets easier to trust when the decisions are visible.', false);
        $response->assertSee('Use one shared order record across counter and fulfillment.', false);
        $response->assertSee('The right people join the problem at the right time.', false);
        $response->assertSee('Good software is a shared responsibility.', false);
        $response->assertSee('Clear work needs clear communication.', false);
        $response->assertSee('The scope can change. The reasoning should remain visible.', false);
        $response->assertSee('A good engagement leaves more than software behind.', false);
        $response->assertSee('The process should fit the problem.', false);
        $response->assertSee('Not sure where to start?', false);
        $response->assertSee('The client is never handed from one isolated department to another.', false);

        $response->assertSee('href="'.route('contact').'"', false);
        $response->assertSee('href="'.route('work').'"', false);
        $response->assertSee('href="'.route('company').'"', false);
        $response->assertSee('href="'.route('company.about').'"', false);
        $response->assertSee('href="'.route('services.product-engineering').'"', false);
        $response->assertSee('href="'.route('services.ui-ux-design').'"', false);
        $response->assertSee('href="'.route('services.cloud-devops').'"', false);

        $response->assertSee('BreadcrumbList', false);
        $response->assertSee('"@type": "Organization"', false);
        $response->assertDontSee('"@type": "Service"', false);

        $response->assertDontSee('Understand → Shape → Engineer → Validate → Launch', false);
        $response->assertDontSee('Careers', false);
        $response->assertDontSee('retainer', false);
        $response->assertDontSee('managed services', false);
        $response->assertDontSee('weekly report', false);
        $response->assertDontSee('daily Slack', false);
        $response->assertDontSee('guaranteed', false);
        $response->assertDontSee('42%', false);
        $response->assertDontSee('NPS', false);
    }

    public function test_company_explore_activates_process(): void
    {
        $html = $this->get('/company')->getContent();

        $this->assertMatchesRegularExpression(
            '/<a[^>]*href="[^"]*\/company\/process"[^>]*>\s*<h3[^>]*>Process/i',
            $html,
        );
    }

    public function test_about_company_areas_activate_process(): void
    {
        $html = $this->get('/company/about')->getContent();

        $this->assertMatchesRegularExpression(
            '/<a[^>]*href="[^"]*\/company\/process"[^>]*>/i',
            $html,
        );
    }

    public function test_company_nav_is_current_on_process(): void
    {
        $this->get('/company/process')
            ->assertOk()
            ->assertSee('href="'.route('company').'"', false)
            ->assertSee('aria-current="page"', false);
    }
}
