<?php

namespace App\Listeners;

use App\Events\PostView;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Session\Store;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class CountPostView
{
    private $session;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * Handle the event.
     *
     * @param \App\Events\PostView $event
     * @return void
     */
    public function handle(PostView $event)
    {
        if (!$this->isPostViewed($event->post))
        {
            $event->post->increment('view');
//            $event->post->view += 1;
//            $event->post->save();
            $this->storePost($event->post);
        }
    }

    public function isPostViewed($post): bool
    {
        $viewed = $this->session->get('viewed_posts', []);
        return array_key_exists($post->id, $viewed);
    }

    public function storePost($post)
    {
        $key = 'viewed_posts.' . $post->id;

        $this->session->put($key, time());
    }
}
