<?php

namespace MyFamilyTree\Messages\Message;

class UserCreated
{
    public function __construct(public int $userId)
    {
    }
}
