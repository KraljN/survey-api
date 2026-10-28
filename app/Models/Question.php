<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Question extends Model
{
    /** @use HasFactory<\Database\Factories\QuestionFactory> */
    use HasFactory;

    public function survey(): BelongsTo
    {
        return $this->belongsTo(Survey::class);
    }

    public function type(): BelongsTo
    {
        return $this->BelongsTo(QuestionType::class, 'question_type_id', 'id');
    }

    public function option(): HasMany
    {
        return $this->hasMany(QuestionOption::class);
    }
}
