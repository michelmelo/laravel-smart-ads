<?php

namespace MichelMelo\LaravelSmartAds\Tests;

use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use MichelMelo\LaravelSmartAds\Http\Livewire\SmartAdComponent;
use MichelMelo\LaravelSmartAds\Models\SmartAd;
use MichelMelo\LaravelSmartAds\Tests\LaravelSmartAdsTestCase as TestCase;

class SmartAdComponentTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_asserts_component_renders_the_ad()
    {
        $smartAd = SmartAd::factory()->create(['name'=> 'test-ad', 'body' => 'Hello']);

        $view = $this->blade(
            '<x-smart-ad-component slug=' . $smartAd->slug . '/>',
        );

        $view->assertSee($smartAd->body);
    }
}
