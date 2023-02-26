<?php

namespace MyFamilyTree\Messages\Message;

class UserUpdated
{
    public function __construct(public int $userId)
    {
    }
}
