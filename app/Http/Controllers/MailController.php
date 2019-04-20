<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\FoodEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
        $sendObject = new \stdClass;
        $sendObject->sender = 'admin';
        $sendObject->receiver = 'alspok';

        Mail::to('1f87c95528-668645@inbox.mailtrap.io')->send(new FoodEmail($sendObject));
    }
}
