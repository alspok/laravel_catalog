<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\FoodEmail;
use Illuminate\Support\Facades\Mail;
use Auth;

class MailController extends Controller
{
    public function send()
    {
        $sendObject = new \stdClass;
        $sendObject->sender = 'Admin';
        // $sendObject->receiver = 'alspok';
        $sendObject->receiver = Auth::user()->name;
        Mail::to(Auth::user()->email)->send(new FoodEmail($sendObject));
    }
}
