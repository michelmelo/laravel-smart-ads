<?php

namespace Tests\Feature;

use _5balloons\LaravelAdManager\Database\Factories\LaravelAdFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use MichelMelo\LaravelSmartAds\Models\SmartAd;
use MichelMelo\LaravelSmartAds\Tests\LaravelSmartAdsTestCase;
use Tests\TestCase;

class SmartAdAdminTest extends LaravelSmartAdsTestCase
{
    /** @test */
    public function it_asserts_user_can_view_ads_on_dashboard()
    {
        $laravelAds = SmartAd::factory()->count(5)->create();
        $this->get('/smart-ad-manager/ads')
                ->assertSee($laravelAds->random()->name);
    }
}
