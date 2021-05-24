<?php

namespace App\Repositories\Feedback;

use App\Entities\Feedback;

class FeedbackRepository implements FeedbackRepositoryInterface
{
	public function save(Feedback $feedback): Feedback
	{
		$feedback->save();

		return $feedback;
	}
}