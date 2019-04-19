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

        Mail::to('alspok@gmail.com')->send(new FoodEmail($sendObject));
    }
}
