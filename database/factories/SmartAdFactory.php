<?php

namespace MichelMelo\LaravelSmartAds\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use MichelMelo\LaravelSmartAds\Models\SmartAd;

class SmartAdFactory extends Factory
{
    protected $model = SmartAd::class;

    public function definition()
    {
        $adname = fake()->word . ' ' . fake()->word;

        return [
            'name'   => $adname,
            'body'   => fake()->randomHtml(),
            'adType' => 'HTML',
            'slug'   => implode('-', explode(' ', $adname)),
        ];
    }
}
