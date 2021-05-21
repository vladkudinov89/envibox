<?php

namespace Tests\Unit;

use App\Entities\Feedback;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FeedbackTest extends TestCase
{
    use RefreshDatabase;

    public function testFeedback()
    {
       $this->withoutExceptionHandling();

       $feedback = factory(Feedback::class)->create([
            'name' => 'John Doe',
            'phone_number' => '+380999455584',
            'message' => 'test message'
        ]);

        $this->assertEquals('John Doe' , $feedback->name);
        $this->assertEquals('+380999455584' , $feedback->phone_number);
        $this->assertEquals('test message' , $feedback->message);
    }
}
