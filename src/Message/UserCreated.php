<?php

namespace App\Message;

class UserCreated
{
    public function __construct(public int $userId)
    {
    }
}
