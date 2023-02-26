<?php

namespace MyFamilyTree\Messages\Message;

class UserDeleted
{
    public function __construct(public int $userId)
    {
    }
}
