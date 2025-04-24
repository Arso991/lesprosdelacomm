<?php

namespace App\Models;

use App\Traits\GeneratesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Testimonial extends Model
{
    use HasFactory, GeneratesUuid, HasTranslations;

    protected $fillable = ['name', 'image', 'profession', 'description'];

    public $translatable = ['profession', 'description'];
}
