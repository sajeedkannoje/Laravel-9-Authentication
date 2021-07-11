<?php

namespace App\Listeners;

use App\Events\VerificationMail;
use App\Mail\WelcomeMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendVerificationMail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  VerificationMail  $event
     * @return void
     */
    public function handle(VerificationMail $event)
    {
        dd($event);
    
        // Mail::to($event->mail)->send(new WelcomeMail());
    }
}
