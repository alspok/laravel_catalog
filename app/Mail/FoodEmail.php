<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FoodEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $foodMail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($foodMail)
    {
        $this->foodMail = $foodMail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('alspok@gmail.com')
                    ->view('mail.food_mail_html')
                    ->text('mail.food_mail_plain');
    }
}
