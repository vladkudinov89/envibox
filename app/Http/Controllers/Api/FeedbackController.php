<?php

namespace App\Http\Controllers\Api;

use App\Actions\Feedback\FeedbackAction;
use App\Actions\Feedback\FeedbackRequest;
use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\ValidateFeedbackRequest;
use Illuminate\Http\Request;

class FeedbackController extends ApiController
{
    private $feedbackAction;

    public function __construct(FeedbackAction $feedbackAction)
    {
        $this->feedbackAction = $feedbackAction;
    }

    public function addFeedback(ValidateFeedbackRequest $feedbackRequest)
    {
        $feedback = $this->feedbackAction->execute(
            new FeedbackRequest(
                $feedbackRequest->name,
                $feedbackRequest->phone_number,
                $feedbackRequest->message
            )
        );

        return $this->successResponse($feedback->toArray(), 201);
    }
}
