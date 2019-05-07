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
        $sendObject->currentTime = date('Y-m-d   H:i');
        
        Mail::to($user->email)->send(new FoodEmail($sendObject));

        return redirect()->route('products.index')->with('success', 'Mail sent successfully');
    }

    public function sendPosts(Request $request)
    {
        $user = Auth::user();
        $admin = DB::select("SELECT email FROM users WHERE name='admin'");

        $sendObject = new \stdClass;
        $sendObject->sender = $user->name;
        $sendObject->receiver = 'Admin';
        $sendObject->tableView = $request->content;
        $sendObject->currentTime = date('Y-m-d   H:i');

        Mail::to($admin)->send(new PostsEmail($sendObject));

        return redirect()->route('products.index');
    }
}
