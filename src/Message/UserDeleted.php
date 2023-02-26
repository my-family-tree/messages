<?php

namespace MyFamilyTree\Messages\Message;

class UserDeleted
{
    public function __construct(public readonly string $userId)
    {
    }
}
