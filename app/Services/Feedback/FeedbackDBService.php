<?php


namespace App\Services\Feedback;


use App\Entities\Feedback;
use App\Repositories\Feedback\FeedbackRepository;

class FeedbackDBService implements IFeedbackService
{
    private $name;
    private $phone_number;
    private $message;
    private $repo;

    public function __construct(
        string $name,string $phone_number,string $message
    )
    {
        $this->name = $name;
        $this->phone_number = $phone_number;
        $this->message = $message;
        $this->repo = new FeedbackRepository();
    }

    public function save(): bool
    {
        $feedback = $this->repo->save(
            new Feedback([
            'name' => $this->name,
            'phone_number' => $this->phone_number,
            'message' => $this->message
            ])
        );

        if($feedback){
            return true;
        } else {
            return false;
        }
    }
}
