<?php


namespace App\Services\Factory;


use App\Services\Feedback\FeedbackDBService;
use App\Services\Feedback\FeedbackFileService;

class FeedbackFactory
{

    private $name;
    private $phone_number;
    private $message;

    public function __construct(string $name,string $phone_number,string $message)
    {
        $this->name = $name;
        $this->phone_number = $phone_number;
        $this->message = $message;
    }

    public function saveToDB(): FeedbackDBService
    {
        return new FeedbackDBService(
            $this->name,
            $this->phone_number,
            $this->message
        );
    }

    public function saveToFile(): FeedbackFileService
    {
        return new FeedbackFileService(
            $this->name,
            $this->phone_number,
            $this->message
        );
    }
}
