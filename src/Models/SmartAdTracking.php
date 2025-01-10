<?php

namespace MichelMelo\LaravelSmartAds\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MichelMelo\LaravelSmartAds\Database\Factories\SmartAdTrackingFactory;

class SmartAdTracking extends Model
{
    use HasFactory;

    protected $table = 'smart_ads_tracking';

    protected $guarded = [];

    protected static function newFactory()
    {
        return SmartAdTrackingFactory::new();
    }
}
