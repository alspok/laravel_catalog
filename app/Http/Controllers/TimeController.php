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
        $timeZone = new DateTimeZone('Europe/Vilnius');
        $dateTime->setTimezone($timeZone);

        return view('layouts/time')->with('current', $dateTime->format('Y M d, H:i'));
    }
}
