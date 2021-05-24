<?php

namespace App\Providers;

use App\Repositories\Feedback\FeedbackRepository;
use App\Repositories\Feedback\FeedbackRepositoryInterface;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(FeedbackRepositoryInterface::class , FeedbackRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
