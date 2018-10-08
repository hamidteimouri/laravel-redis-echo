<?php

namespace App\Events\Article;

use App\Article;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class ArticleCreateEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $article;

    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return [new PrivateChannel('myArticle'), new Channel('myArticlePublic')];
        //return new PrivateChannel('myArticle');
    }


    public function broadcastAs()
    {
        return 'server.article.created';
    }


    public function broadcastWith()
    {

        return [
            'id' => $this->article->id,
            'title' => $this->article->title,
            'description' => $this->article->description,
        ];
    }

}
