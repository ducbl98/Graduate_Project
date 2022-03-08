<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Session\Store;

class FilterCount
{
    public $session;
    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $posts = $this->getViewedPosts();
        if (!is_null($posts))
        {
            $posts = $this->cleanExpiredViews($posts);
            $this->storePosts($posts);
        }

        return $next($request);
    }

    public function getViewedPosts()
    {
        return $this->session->get('viewed_posts', null);
    }

    public function cleanExpiredViews($posts): array
    {
        $time = time();

        // Let the views expire after one hour.
        $throttleTime = 3600;

        return array_filter($posts, function ($timestamp) use ($time, $throttleTime)
        {
            return ($timestamp + $throttleTime) > $time;
        });
    }

    public function storePosts($posts)
    {
        $this->session->put('viewed_posts', $posts);
    }
}
