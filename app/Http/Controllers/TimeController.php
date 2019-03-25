<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use DateTimeZone;

class TimeController extends Controller
{
    public function time()
    {
        $dateTime = new DateTime;
        $timeZone = new DateTimeZone('Europe/Helsinki');
        $dateTime->setTimezone($timeZone);

        return $dateTime->format('Y M d, H:i');
        // var_dump($current->format('Y M d'));
        // return;
        // return $current->format('Y / M / d H:m');
    }
}
