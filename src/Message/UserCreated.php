<?php

namespace MyFamilyTree\Messages\Message;

class UserCreated
{
    public function __construct(public readonly int $userId)
    {
    }
}
