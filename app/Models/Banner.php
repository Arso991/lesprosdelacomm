<?php

namespace App\Models;

use App\Traits\GeneratesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Banner extends Model
{
    use HasFactory, GeneratesUuid, HasTranslations;

    protected $fillable = ['title', 'subtitle', 'images'];

    public $translatable = ['title', 'subtitle'];
}
