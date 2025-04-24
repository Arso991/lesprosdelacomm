<?php

namespace App\Models;

use App\Traits\GeneratesUuid;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    use HasFactory, GeneratesUuid, HasTranslations;

    protected $fillable = [
        'title',
        'content',
        'cover_image',
        'tags',
        'views',
        'estimated_reading_time',
        'address',
        'price',
        'event_day',
        'type',
    ];

    public $translatable = ['title', 'content', 'tags'];

    public function getFormattedDayAttribute()
    {
        //Carbon::setLocale('fr');
        return Carbon::parse($this->event_day)->translatedFormat('D, M d');
    }

    public function getFormattedHourAttribute()
    {
        //Carbon::setLocale('fr');
        return Carbon::parse($this->event_day)->translatedFormat('H:i');
    }
}
