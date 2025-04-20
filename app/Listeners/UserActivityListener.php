<?php

namespace App\Listeners;

use App\Events\UserActivityEvent;
use App\Models\LogActivityModel;

class UserActivityListener
{
    public function handle(UserActivityEvent $event)
    {
        $logModel = new LogActivityModel();
        $logModel->insert([
            'id_user' => $event->id_user,
            'what_happens' => $event->what_happens,
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
