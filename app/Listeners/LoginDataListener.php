<?php

namespace App\Listeners;

use App\Events\LoginSubmit;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LoginDataListener
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
     * @param  LoginSubmit  $event
     * @return void
     */
    public function handle(LoginSubmit $event)
    {
        //
    }
}
