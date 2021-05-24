<?php  

namespace App\Repositories\Feedback;

use App\Entities\Feedback;

interface FeedbackRepositoryInterface
{
	public function save(Feedback $feedback): Feedback;
}