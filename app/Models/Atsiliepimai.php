<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atsiliepimai extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'services_uses',
        'services_quality',
        'opinion_about_us',
        'created_at',
        'updated_at'
    ];
}
