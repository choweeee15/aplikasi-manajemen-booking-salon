<?php

namespace App\Events;

class UserActivityEvent
{
    public $id_user;
    public $what_happens;

    public function __construct($id_user, $what_happens)
    {
        $this->id_user = $id_user;
        $this->what_happens = $what_happens;
    }
}
