<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\WithoutTimestamps;
use Illuminate\Database\Eloquent\Relations\Pivot;

#[WithoutTimestamps]
class SurveyAssignment extends Pivot
{
    protected function casts(): array
    {
        return [
            'assigned_at' => 'datetime',
            'due_date' => 'datetime',
            'completed_at' => 'datetime',
        ];
    }
}
