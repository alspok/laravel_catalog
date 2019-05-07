<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PostsController;

class RelationController extends Controller
{
    public function multiple(Request $request)
    {
        $mail = new MailController();
        $mail->sendPosts($request);

        $send = new PostsController();
        $send->store($request);

        return redirect()->route('products.guest_index');
    }
}