<?php

namespace App\Listeners;

use App\Events\PodcastProcessed;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendPodcastNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        // dd('SendPodcastNotification');
        //
        // $this->handle();
        // dd($event);
    }

    /**
     * Handle the event.
     *
     * @param  PodcastProcessed  $event
     * @return void
     */
    public function handle(PodcastProcessed $event)
    {
        // dd($event);
        //
    }
}
