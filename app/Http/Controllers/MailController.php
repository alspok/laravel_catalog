<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\FoodEmail;
use Illuminate\Support\Facades\Mail;
use DB;
use Auth;

class MailController extends Controller
{
    public function send()
    {
        $user = Auth::user();

        $sendObject = new \stdClass;
        $sendObject->sender = 'Admin';
        $sendObject->receiver = $user->name;
        $sendObject->tableView = DB::table('products')->get();
        $sendObject->currentTime = date('Y-m-d H:i');
        
        Mail::to($user->email)->send(new FoodEmail($sendObject));
    }
}
