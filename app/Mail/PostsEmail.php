<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use DB;
use Auth;

class PostsEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $postsMail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($postsMail)
    {
        $this->postsMail = $postsMail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(Auth::user()->email)
                    ->view('mail.posts_mail_html')
                    ->text('mail.posts_mail_plain');
    }
}
