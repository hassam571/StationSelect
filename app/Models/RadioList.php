<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
use App\Models\Language;
use App\Models\Genres;
use App\Models\Category;
use Illuminate\Support\Str;


class RadioList extends Model
{
    protected $fillable = ['staion_logo', 'country_id','slug', 'category_id', 'station_website' ,'genres_id', 'fb_link', 'name', 'sub_category_id', 'insta_link','tiktok_link','x_link','staion_banner', 'streaming_link', 'count', 'description','featured'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function genres()
    {
        return $this->belongsTo(Genres::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($station) {
            $station->slug = Str::slug($station->name);
        });

        static::updating(function ($station) {
            $station->slug = Str::slug($station->name);
        });
    }

}
