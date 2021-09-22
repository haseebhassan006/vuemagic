<?php

namespace App\Listeners;

use IlluminateAuthEventsLogin;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Session;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LoginSuccessful
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
     * @param  IlluminateAuthEventsLogin  $event
     * @return void
     */
    public function handle(Login $event)
    {
        $event->subject = "Login";
        $event->description = $event->user->name." Login Successfully ";

        Session::flash("Login Successfully ","Hey ".$event->user->name." ,Welcome Back" );
        activity($event->subject)
             ->by($event->user)
             ->log($event->description);


    }
}
