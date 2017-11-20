<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notifiable;

use App\Events\UserEvent;
use App\Mail\SendMailToRegisteredUser;
use Mail;

class UserRegistiratonSendMail
{
    use Notifiable;
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
     * @param  UserEvent  $event
     * @return void
     */
    public function handle(UserEvent $event)
    {
        Mail::to($event->user->email)
        ->send(new SendMailToRegisteredUser($event->user));
    }
}
