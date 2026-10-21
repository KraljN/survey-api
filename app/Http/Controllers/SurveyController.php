<?php

namespace App\Http\Controllers;

use App\Http\Requests\NotificationRequest;
use App\Models\Survey;
use App\Services\SurveyService;

class SurveyController extends Controller
{
    public function __construct(private SurveyService $surveyService)
    {
    }

    public function sendNotification(NotificationRequest $request){
        return $this->surveyService->getSurveyPost(surveyTitle: $request->title);
    }

    public function index(){
        return Survey::all()->toResourceCollection();
    }

    public function show(Survey $survey){
        return $survey->toResource();
    }

    public function store(){
         redirect('surveys.index');
    }
}
