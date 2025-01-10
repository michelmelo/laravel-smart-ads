<?php

namespace MichelMelo\LaravelSmartAds\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use MichelMelo\LaravelSmartAds\Models\SmartAd;
use MichelMelo\LaravelSmartAds\Models\SmartAdTracking;

class SmartAdTrackingFactory extends Factory
{
    protected $model = SmartAdTracking::class;

    public function definition()
    {
        return [
            'ad_clicks'   => json_encode(['test' => '6']),
            'totalClicks' => 5,
        ];
    }
}
