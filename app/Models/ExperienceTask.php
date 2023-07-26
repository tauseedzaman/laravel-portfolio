<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExperienceTask extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "description",
        "experience_id"
    ];

    /**
     * Get the experience that owns the ExperienceTask
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function experience(): BelongsTo
    {
        return $this->belongsTo(Experience::class);
    }
}
