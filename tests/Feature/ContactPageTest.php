<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContactPageTest extends TestCase
{
    public function test_contact_page_returns_the_brief(): void
    {
        $response = $this->get('/contact');

        $response->assertOk();
        $response->assertSee('SKYEMBER - Contact', false);
        $response->assertSee('Tell us what', false);
        $response->assertSee('you\'re trying', false);
        $response->assertSee('info@skyember.com', false);
        $response->assertSee('id="contact-heading"', false);
        $response->assertSee('rel="canonical"', false);
        $response->assertSee('ContactPage', false);
        $response->assertSee('BreadcrumbList', false);
        $response->assertSee('Continue in email', false);
        $response->assertDontSee('Have something worth building?', false);
        $response->assertDontSee('href="#final-cta"', false);
    }

    public function test_homepage_close_points_at_contact_and_selected_work_can_open_the_case_study(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('href="/contact"', false);
        $response->assertSee('href="#final-cta"', false);
        $response->assertSee('href="/work/business-operations-platform"', false);
    }

    public function test_contact_navigation_keeps_the_homepage_story_intact(): void
    {
        $this->get('/contact')
            ->assertOk()
            ->assertSee('href="'.route('solutions').'"', false)
            ->assertSee('href="#brief"', false);

        $this->get('/')
            ->assertOk()
            ->assertSee('href="'.route('solutions').'"', false)
            ->assertSee('href="#final-cta"', false)
            ->assertSee('id="capabilities"', false);
    }

    public function test_a_valid_brief_is_prepared_in_the_visitors_email(): void
    {
        $response = $this->post('/contact', [
            'name' => "Ada\nLovelace",
            'email' => 'ada@example.com',
            'organization' => 'Northwind',
            'kind' => 'business',
            'problem' => 'The counter cannot reserve stock without breaking the earliest-expiry rule.',
        ]);

        $response->assertRedirect('/contact#brief-status');
        $response->assertSessionHas('contact.ready', true);

        $mailto = session('contact.mailto');
        $this->assertIsString($mailto);
        $this->assertStringStartsWith('mailto:info@skyember.com?subject=', $mailto);
        $this->assertStringContainsString(rawurlencode('Brief from Northwind'), $mailto);
        $this->assertStringContainsString(rawurlencode('Name: Ada Lovelace'), $mailto);
        $this->assertStringContainsString(rawurlencode('System: Business software'), $mailto);

        $this->followingRedirects()
            ->post('/contact', [
                'name' => 'Ada Lovelace',
                'email' => 'ada@example.com',
                'organization' => 'Northwind',
                'kind' => 'business',
                'problem' => 'The counter cannot reserve stock without breaking the earliest-expiry rule.',
            ])
            ->assertOk()
            ->assertSee('Ready to send', false)
            ->assertSee('Open email to send', false)
            ->assertSee('Update the brief', false)
            ->assertSee('Ada Lovelace', false);
    }

    public function test_an_incomplete_brief_names_the_fixes(): void
    {
        $this->post('/contact', [
            'name' => '',
            'email' => 'not-an-email',
            'organization' => '',
            'problem' => 'Too short',
        ])
            ->assertRedirect('/contact#brief-errors')
            ->assertSessionHasErrors(['name', 'email', 'organization', 'problem']);
    }

    public function test_a_hidden_trap_does_not_prepare_a_brief(): void
    {
        $this->post('/contact', [
            'name' => 'Ada Lovelace',
            'email' => 'ada@example.com',
            'organization' => 'Northwind',
            'problem' => 'The counter cannot reserve stock without breaking the earliest-expiry rule.',
            'company_website' => 'https://spam.example',
        ])
            ->assertRedirect('/contact')
            ->assertSessionMissing('contact.mailto');
    }

    public function test_the_brief_preview_escapes_markup(): void
    {
        $this->followingRedirects()
            ->post('/contact', [
                'name' => '<script>alert(1)</script>',
                'email' => 'ada@example.com',
                'organization' => 'Northwind',
                'problem' => 'The counter cannot reserve stock without breaking the earliest-expiry rule.',
            ])
            ->assertOk()
            ->assertDontSee('<script>alert(1)</script>', false)
            ->assertSee('&lt;script&gt;alert(1)&lt;/script&gt;', false);
    }
}
