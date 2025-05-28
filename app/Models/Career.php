<?php

namespace App\Models;

use App\Traits\GeneratesUuid;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Career extends Model
{
    use HasFactory, GeneratesUuid, HasTranslations;

    protected $fillable = [
        'title',
        'type',
        'description',
        'image',
        'closing_date',
        'department',
        'city',
        'address',
        'phone',
        'email',
        'graduation'
    ];

    public $translatable = ['title', 'type', 'description'];

    public function getFormattedDayAttribute()
    {
        //Carbon::setLocale('fr');
        return Carbon::parse($this->closing_date)->translatedFormat('d M Y');
    }
}
