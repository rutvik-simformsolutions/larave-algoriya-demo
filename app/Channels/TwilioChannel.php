<?php

namespace App\Channels;

use App\Notifications\DepartmentNotification;
use Illuminate\Notifications\Notification;

class TwiolioChannel
{
    public static function send($notifiable, DepartmentNotification $notification)
    {
        $message = $notification->toTwilio($notifiable);
        dd($message);
        // Send notification to the $notifiable instance...
    }
}
