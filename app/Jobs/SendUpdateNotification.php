<?php

namespace App\Jobs;

use App\Mail\UpdateUserInformation;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendUpdateNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(protected User $user)
    {

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $emailTemplate = new UpdateUserInformation();

        Mail::to($this->user)->send($emailTemplate);
    }
}
