<?php

namespace App\Listeners;

use App\Events\ArtiklePublishEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\ArtiklePublishMail;


class SendEmailArtiklePublish implements ShouldQueue
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
     * @param  ArtiklePublishEvent  $event
     * @return void
     */
    public function handle(ArtiklePublishEvent $event)
    {
        Mail::to($event->user)->send(new ArtiklePublishMail($event->user, $event->userArtikle, $event->artikle));
    }
}
