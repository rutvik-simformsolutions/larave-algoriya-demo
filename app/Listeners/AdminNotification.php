<?php

namespace App\Listeners;

use App\Channels\TwiolioChannel;
use App\Events\DepartmentCreated;
use App\Models\User;
use App\Notifications\DepartmentNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use Illuminate\Queue\InteractsWithQueue;

class AdminNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\DepartmentCreated  $event
     * @return void
     */
    public function handle(DepartmentCreated $event)
    {
        //logic to do handle an event
        $user = User::whereIn('role',['0','1'])->get();
        // TwiolioChannel::send($user,new DepartmentNotification);
        // ddd($event->department);
    }
}
