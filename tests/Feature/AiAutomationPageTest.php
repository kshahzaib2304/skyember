<?php

namespace Tests\Feature;

use Tests\TestCase;

class AiAutomationPageTest extends TestCase
{
    public function test_ai_page_is_controlled_workflow_not_theatre(): void
    {
        $response = $this->get('/solutions/ai-automation');

        $response->assertOk();
        $response->assertSee('AI Automation &amp; AI Agent Development | SKYEMBER', false);
        $response->assertSee('Make the work move without making the system harder to trust.', false);
        $response->assertSee('Not every task needs AI.', false);
        $response->assertSee('Repetition', false);
        $response->assertSee('Judgment', false);
        $response->assertSee('Handoffs', false);
        $response->assertSee('Choose AI and automation when the work contains a repeatable decision.', false);
        $response->assertSee('Intelligence where it earns its place.', false);
        $response->assertSee('Understand', false);
        $response->assertSee('Decide', false);
        $response->assertSee('Act', false);
        $response->assertSee('Escalate', false);
        $response->assertSee('AI inside the workflow.', false);
        $response->assertSee('Start with automation. Add autonomy only when it earns it.', false);
        $response->assertSee('Useful AI has boundaries.', false);
        $response->assertSee('Context', false);
        $response->assertSee('Controls', false);
        $response->assertSee('Evaluation', false);
        $response->assertSee('Oversight', false);
        $response->assertSee('The system needs to know when it is wrong.', false);
        $response->assertSee('CASE 1048', false);
        $response->assertSee('CASE 1049', false);
        $response->assertSee('The model is rarely the whole system.', false);
        $response->assertSee('A workflow that knows when to act—and when to ask.', false);
        $response->assertSee('Representative automation', false);
        $response->assertSee('Sometimes the best automation is no automation.', false);
        $response->assertSee('Start with the workflow.', false);
        $response->assertSee('Map', false);
        $response->assertSee('Identify', false);
        $response->assertSee('Prototype', false);
        $response->assertSee('Harden', false);
        $response->assertSee('Have work worth automating?', false);
        $response->assertSee('Talk to SKYEMBER', false);
        $response->assertSee('See the workflow', false);
        $response->assertSee('DOC-218', false);
        $response->assertSee('href="'.route('contact').'"', false);
        $response->assertSee('BreadcrumbList', false);
        $response->assertSee('"@type": "Service"', false);
        $response->assertDontSee('href="/work/business-operations-platform"', false);
        $response->assertDontSee('Operations workspace', false);
        $response->assertDontSee('SO-10482', false);
        $response->assertDontSee('Project Atlas', false);
        $response->assertDontSee('chatbot', false);
        $response->assertDontSee('neural', false);
        $response->assertDontSee('ROI', false);
        $response->assertDontSee('42%', false);
        $response->assertDontSee('href="/solutions/ai-automation"', false);
    }

    public function test_secondary_see_the_workflow_has_no_href_yet(): void
    {
        $html = $this->get('/solutions/ai-automation')->getContent();

        $this->assertStringContainsString('See the workflow', $html);
        $this->assertDoesNotMatchRegularExpression(
            '/<a[^>]*>\s*See the workflow/i',
            $html,
        );
    }

    public function test_solutions_hub_activates_ai_explore_as_final_child(): void
    {
        $this->get('/solutions')
            ->assertOk()
            ->assertSee('href="/solutions/ai-automation"', false)
            ->assertSee('href="/solutions/business-software"', false)
            ->assertSee('href="/solutions/saas-products"', false)
            ->assertSee('href="/solutions/custom-platforms"', false)
            ->assertSee('Explore this solution', false)
            ->assertSee('The work contains a repeatable decision', false);
    }
}
