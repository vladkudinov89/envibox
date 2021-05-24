<?php

namespace App\Actions\Feedback;

class FeedbackResponse
{

	private $status;

	public function __construct(string $status)
	{
		$this->status = $status;
	}

    public function toArray(): array
    {
        return [
            'status' => $this->status
        ];
    }
}
