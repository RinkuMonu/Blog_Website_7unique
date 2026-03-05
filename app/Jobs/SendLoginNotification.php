<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;
class SendLoginNotification implements ShouldQueue
{
    use Queueable;

    public function __construct()
    {
        //
    }
    public function handle(): void
    {
        try {
            Log::info("Queue Job Chalu Ho Gayi Hai!");
        } catch (\Exception $e) {
            Log::error("Queue Job Mein Error Aaya: " . $e->getMessage());
        }
    }
}
