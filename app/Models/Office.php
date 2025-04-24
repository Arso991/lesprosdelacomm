<?php

namespace App\Models;

use App\Traits\GeneratesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Office extends Model
{
    use HasFactory, GeneratesUuid, HasTranslations;

    protected $fillable = ['name', 'role', 'profession', 'image'];

    public $translatable = ['role', 'profession'];
}
