<?php

namespace App\Listeners\Article;

use App\Events\Article\ArticleCreateEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ArticleCreateListener
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
     * @param  ArticleCreateEvent  $event
     * @return void
     */
    public function handle(ArticleCreateEvent $event)
    {
        //
    }
}
