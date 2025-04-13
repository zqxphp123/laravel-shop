<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

//Artisan::command('mail:send {user}', function (string $user) {
//    $this->info("Sending email to: {$user}!");
//});


Schedule::call(function () {
    echo 111;
    $this->output("Sending Schedule");
})->everyFiveSeconds();
