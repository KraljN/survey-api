<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class QuestionStatus extends Model
{
    public function surveys(): HasMany
    {
        return $this->hasMany(Survey::class);
    }
}
