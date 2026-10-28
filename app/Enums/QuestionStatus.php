<?php

namespace App\Enums;

enum QuestionStatus: string
{
    case INPROGRESS = 'INPROGRESS';
    case FINISHED = 'FINISHED';
    case SCHEDULED = 'SCHEDULED';
}
