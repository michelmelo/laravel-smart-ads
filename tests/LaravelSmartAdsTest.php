<?php

namespace MichelMelo\LaravelSmartAds\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use MichelMelo\LaravelSmartAds\Models\SmartAd;
use MichelMelo\LaravelSmartAds\Tests\LaravelSmartAdsTestCase as TestCase;

class LaravelSmartAdsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_asserts_a_laravel_ad_has_a_name()
    {
        $smartAd = SmartAd::factory()->create(['name' => 'Alright']);
        $this->assertEquals('Alright', $smartAd->name);
    }

    /** @test */
    public function it_asserts_a_laravel_ad_has_a_body()
    {
        $smartAd = SmartAd::factory()->create(['body' => '<span>Hello</span>']);
        $this->assertEquals('<span>Hello</span>', $smartAd->body);
    }
}
