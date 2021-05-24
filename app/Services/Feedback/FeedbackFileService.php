<?php


namespace App\Services\Feedback;


use Illuminate\Support\Facades\Storage;

class FeedbackFileService implements IFeedbackService
{
    private $name;
    private $phone_number;
    private $message;

    public function __construct(
        string $name,string $phone_number,string $message
    )
    {
        $this->name = $name;
        $this->phone_number = $phone_number;
        $this->message = $message;
    }

    public function save(): bool
    {
        $content = "Feedback Form \n";

        $content .=
            "name - $this->name \n".
            "phone_number - $this->phone_number \n".
            "message - $this->message \n"
        ;

        $file = Storage::disk('public')->put( now() . '-feedback.txt', $content);

        if($file){
            return true;
        } else {
            return false;
        }
    }
}
