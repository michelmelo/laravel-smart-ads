<?php

namespace MichelMelo\LaravelSmartAds\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MichelMelo\LaravelSmartAds\Database\Factories\SmartAdFactory;

class SmartAd extends Model
{
    use HasFactory;

    protected $table = 'smart_ads';

    protected $guarded = [];

    protected static function newFactory()
    {
        return SmartAdFactory::new();
    }
}
