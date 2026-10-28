<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable('name')]
class QuestionType extends Model
{
    /** @use HasFactory<\Database\Factories\QuestionTypeFactory> */
    use HasFactory;

    public function questions(){
        return $this->hasMany(Question::class);
    }
}
