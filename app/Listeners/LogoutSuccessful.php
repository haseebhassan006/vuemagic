<?php

namespace App\Listeners;

use IlluminateAuthEventsLogout;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Session;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LogoutSuccessful
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
     * @param  IlluminateAuthEventsLogout  $event
     * @return void
     */
    public function handle(Logout $event)
    {
        $event->subject = "Logout";
        $event->description = $event->user->name." Logout Successfully";

        Session::flash("Logout Successfully ","you Are Loged Out");
        activity($event->subject)
             ->by($event->user)
             ->log($event->description);

    }
}
