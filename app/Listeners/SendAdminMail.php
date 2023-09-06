<?php

namespace App\Listeners;

use App\Events\PatientRegistered;
use App\Mail\AdminFollowup;
use App\Mail\Patient;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendAdminMail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PatientRegistered $event): void
    {
        Mail::to('faisalahmmedapon@gmail.com')->send(new AdminFollowup());

    }
}
