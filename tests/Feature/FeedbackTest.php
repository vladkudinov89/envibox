<?php

namespace Tests\Feature;

use App\Exceptions\Feedback\SaveToDBException;
use App\Services\Factory\FeedbackFactory;
use App\Services\Feedback\FeedbackDBService;
use App\Services\Feedback\FeedbackFileService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FeedbackTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_add_feedback()
    {
        $data = [
            'name' => 'John Doe',
            'phone_number' => '+380999455584',
            'message' => 'test message'
        ];

        $response = $this
            ->post('api/v1/feedback' , $data)
            ->assertStatus(201);

    }

    public function test_db_service()
    {
        $factory = new FeedbackFactory(
            'John Doe',
            '+380999455584',
            'test message'
        );

        $db = $factory->saveToDB();

        self::assertInstanceOf(FeedbackDBService::class , $db);
    }

    public function test_file_service()
    {
        $factory = new FeedbackFactory(
            'John Doe',
            '+380999455584',
            'test message'
        );

        $file = $factory->saveToFile();

        self::assertInstanceOf(FeedbackFileService::class , $file);
    }
}
