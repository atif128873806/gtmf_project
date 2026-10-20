<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    public function test_homepage_renders_the_primary_sections(): void
    {
        $response = $this->get(route('home'));

        $response->assertOk()
            ->assertSee('Build a GTM engine')
            ->assertSee('GTMF1 Revenue Operations')
            ->assertSee('GTMF1')
            ->assertSee('GTM plays we build')
            ->assertSee('Questions we')
            ->assertSee('href="#brief-form"', false);
    }

    public function test_brief_requires_a_valid_description(): void
    {
        $this->from(route('home'))
            ->post(route('review-brief.store'), ['brief' => 'short'])
            ->assertRedirect(route('home'))
            ->assertSessionHasErrors('brief');
    }

    public function test_valid_brief_is_validated_and_returns_to_the_local_form(): void
    {
        $this->post(route('review-brief.store'), ['brief' => 'Route qualified leads quickly'])
            ->assertRedirect(route('home', '#brief-form'))
            ->assertSessionHas('status', 'Your brief passed validation. This form does not send or store it.');
    }
}
