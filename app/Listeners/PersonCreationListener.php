<?php

namespace App\Listeners;

use App\Events\PersonCreationEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class PersonCreationListener implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param PersonCreationEvent $event
     * @return void
     */
    public function handle(PersonCreationEvent $event)
    {
        Log::channel('person')->info('There is new person created', ['data' => $event->person]);
    }
}
