<?php

namespace App\Message;

class UserUpdated
{
    public function __construct(public int $userId)
    {
    }
}
