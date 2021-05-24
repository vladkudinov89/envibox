<?php

namespace App\Actions\Feedback;

use App\Exceptions\Feedback\SaveToDBException;
use App\Exceptions\Feedback\SaveToFileException;
use App\Services\Factory\FeedbackFactory;

class FeedbackAction
{
    public function execute(FeedbackRequest $request): FeedbackResponse
    {
        $errors = [];

        $factoryFeedback = new FeedbackFactory(
            $request->getName(),
            $request->getPhoneNumber(),
            $request->getMessage()
        );

        $db = $factoryFeedback->saveToDB()->save();

        if(!$db){
            $errors[] = 1;
            throw new SaveToDBException("Can't save to DB feedback");
        }

        $file = $factoryFeedback->saveToFile()->save();

        if(!$file){
            $errors[] = 1;
            throw new SaveToFileException("Can't save to File feedback");
        }

        if(empty($errors)){
            $status = 'success';
        } else {
            $status = 'failed';
        }

    	return new FeedbackResponse($status);
    }
}
