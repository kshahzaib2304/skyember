<?php

namespace Tests\Feature;

use Tests\TestCase;

class CaseStudyPageTest extends TestCase
{
    public function test_case_study_returns_the_representative_system(): void
    {
        $response = $this->get('/work/business-operations-platform');

        $response->assertOk();
        $response->assertSee('Business Operations Platform — SKYEMBER', false);
        $response->assertSee('Business Operations Platform', false);
        $response->assertSee('Turning pharmacy operations into one connected workflow.', false);
        $response->assertSee('Representative project', false);
        $response->assertSee('Representative system', false);
        $response->assertSee('The work is more complicated than the transaction.', false);
        $response->assertSee('One order. Everything it depends on.', false);
        $response->assertSee('Designing around constraints.', false);
        $response->assertSee('Batch selection', false);
        $response->assertSee('Reservation', false);
        $response->assertSee('Traceability', false);
        $response->assertSee('Workflow', false);
        $response->assertSee('The order is only one part of the system.', false);
        $response->assertSee('Designed around the work, not the software.', false);
        $response->assertSee('Clarity', false);
        $response->assertSee('Context', false);
        $response->assertSee('Continuity', false);
        $response->assertSee('Software that respects the workflow.', false);
        $response->assertSee('What the system is designed to make possible.', false);
        $response->assertSee('Have a workflow this complicated?', false);
        $response->assertSee('Pharmacy / Operations', false);
        $response->assertSee('BreadcrumbList', false);
        $response->assertSee('rel="canonical"', false);
        $response->assertSee('href="'.route('contact').'"', false);
        $response->assertSee('Start a conversation', false);
        $response->assertDontSee('Article', false);
        $response->assertDontSee('42%', false);
        $response->assertDontSee('Results', false);
        $response->assertDontSee('Laravel', false);
        $response->assertDontSee('Kubernetes', false);
    }

    public function test_explore_case_study_links_activate_without_restyling_the_homepage(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('href="/work/business-operations-platform"', false)
            ->assertSee('Explore case study', false)
            ->assertSee('Pharmacy / Operations', false)
            ->assertSee('Software built around a real business.', false);

        $this->get('/work')
            ->assertOk()
            ->assertSee('href="/work/business-operations-platform"', false)
            ->assertSee('Explore case study', false)
            ->assertSee('Pharmacy / Operations', false)
            ->assertSee('"url": "'.url('/work/business-operations-platform').'"', false);
    }

    public function test_case_study_navigation_points_home_work_and_contact(): void
    {
        $this->get('/work/business-operations-platform')
            ->assertOk()
            ->assertSee('href="'.route('work').'"', false)
            ->assertSee('href="'.route('contact').'"', false)
            ->assertSee('href="'.route('solutions').'"', false)
            ->assertDontSee('href="#final-cta"', false);
    }
}
