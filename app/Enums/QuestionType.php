<?php

namespace App\Enums;

enum QuestionType: string
{
    case SINGLE_CHOICE = 'single_choice';
    case MULTIPLE_CHOICE = 'multiple_choice';
    case RATING = 'rating';
    case TEXT = 'text';
}
