<?php

namespace App\Listeners\Social;

use App\Events\Social\GithubAccountWasLinked;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\Social\GitHubAccountLinked;
use Mail;

class SendGitHubLinkedEmail
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
     * @param  GithubAccountWasLinked  $event
     * @return void
     */
    public function handle(GithubAccountWasLinked $event)
    {
        Mail::to($event->user)->send(new GitHubAccountLinked($event->user));
    }
}
