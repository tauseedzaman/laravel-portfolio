<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        "username",
        "name",
        "title",
        "linkedin_url",
        "github_url",
        "insta_url",
        "hero_gift",
        "email",
        "phone",
        "pronouns",
        "location",
        "languages",
        "pit_animal",
    ];

    protected $casts = [
        'languages' => 'array',
    ];
}
