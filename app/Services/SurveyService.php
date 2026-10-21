<?php

namespace App\Services;

use App\Models\Survey;

class SurveyService
{
    public function getSurveyPost(string $surveyTitle): Survey
    {
        return Survey::where('title', 'LIKE', '%' . $surveyTitle . '%')->select('email')->firstOrFail();
    }
}
