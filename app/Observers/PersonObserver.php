<?php

namespace App\Observers;

use App\Models\Person;
use Illuminate\Support\Facades\Log;

class PersonObserver
{
    /**
     * Handle the $person "created" event.
     *
     * @param Person $person
     * @return void
     */
    public function created(Person $person)
    {
        Log::channel('person')->info('There is new person created', ['data' => $person]);
    }

    /**
     * Handle the Person "updated" event.
     *
     * @param Person $person
     * @return void
     */
    public function updated(Person $person)
    {
        Log::channel('person')->info('There is  person updated', ['data' => $person]);
    }

    /**
     * Handle the Person "deleted" event.
     *
     * @param Person $person
     * @return void
     */
    public function deleted(Person $person)
    {
        Log::channel('person')->info('There is  person deleted', ['data' => $person]);
    }

    /**
     * Handle the Person "restored" event.
     *
     * @param Person $person
     * @return void
     */
    public function restored(Person $person)
    {
        Log::channel('person')->info('There is person restored', ['data' => $person]);
    }

    /**
     * Handle the Person "force deleted" event.
     *
     * @param Person $person
     * @return void
     */
    public function forceDeleted(Person $person)
    {
        Log::channel('person')->info('There is person forceDeleted', ['data' => $person]);
    }
}
