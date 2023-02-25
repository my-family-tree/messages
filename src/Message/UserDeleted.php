<?php

namespace App\Message;

class UserDeleted
{
    public function __construct(public int $userId)
    {
    }
}
