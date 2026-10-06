<?php

namespace Tests\Feature;

use Tests\TestCase;

class UiUxDesignPageTest extends TestCase
{
    public function test_ui_ux_design_is_design_judgment_not_a_gallery(): void
    {
        $response = $this->get('/services/ui-ux-design');

        $response->assertOk();
        $response->assertSee('UI/UX Design Services | SKYEMBER', false);
        $response->assertSee('Make complex software easier to understand.', false);
        $response->assertSee('Good interfaces solve more than visual problems.', false);
        $response->assertSee('People need context', false);
        $response->assertSee('Bring UI/UX in when people are struggling with the software.', false);
        $response->assertSee('From user need to usable system.', false);
        $response->assertSee('Research', false);
        $response->assertSee('Structure', false);
        $response->assertSee('Interaction', false);
        $response->assertSee('Systematize', false);
        $response->assertSee('Validate', false);
        $response->assertSee('A good interface carries the decision with it.', false);
        $response->assertSee('A product should not reinvent itself on every screen.', false);
        $response->assertSee('The design has to survive outside the mockup.', false);
        $response->assertSee('Responsive', false);
        $response->assertSee('Accessible', false);
        $response->assertSee('Prototype the question before building the answer.', false);
        $response->assertSee('The design gets better when someone tries to use it.', false);
        $response->assertSee('Representative validation', false);
        $response->assertSee('The screen is only one expression of the product.', false);
        $response->assertSee('Clarity is the feature.', false);
        $response->assertSee('Representative interface', false);
        $response->assertSee('Design does not stop at the handoff.', false);
        $response->assertSee('Sometimes the interface isn\'t the real problem.', false);
        $response->assertSee('Have software people need to understand?', false);
        $response->assertSee('Decision made clear', false);
        $response->assertSee('See our work', false);
        $response->assertSee('href="'.route('contact').'"', false);
        $response->assertSee('href="'.route('work').'"', false);
        $response->assertSee('href="'.route('services.product-engineering').'"', false);
        $response->assertSee('BreadcrumbList', false);
        $response->assertSee('"@type": "Service"', false);
        $response->assertDontSee('href="/services/web-development"', false);
        $response->assertDontSee('href="/services/mobile-development"', false);
        $response->assertDontSee('href="/services/cloud-devops"', false);
        $response->assertDontSee('87%', false);
        $response->assertDontSee('NPS', false);
        $response->assertDontSee('participants said', false);
        $response->assertDontSee('Figma', false);
    }

    public function test_services_hub_activates_ui_ux_explore_among_remaining_children(): void
    {
        $html = $this->get('/services')->getContent();

        $this->assertStringContainsString('href="/services/product-engineering"', $html);
        $this->assertStringContainsString('href="/services/ui-ux-design"', $html);
        $this->assertStringContainsString('href="/services/web-development"', $html);
        $this->assertStringContainsString('href="/services/mobile-development"', $html);
        $this->assertStringContainsString('href="/services/cloud-devops"', $html);
        $this->assertMatchesRegularExpression(
            '/<a[^>]*href="\/services\/ui-ux-design"[^>]*>\s*Explore service/i',
            $html,
        );
    }

    public function test_services_nav_is_current_on_ui_ux_design(): void
    {
        $this->get('/services/ui-ux-design')
            ->assertOk()
            ->assertSee('href="'.route('services').'"', false)
            ->assertSee('aria-current="page"', false);
    }
}
