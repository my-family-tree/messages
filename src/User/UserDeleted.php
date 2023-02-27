<?php

namespace MyFamilyTree\Messages\User;

class UserDeleted
{
    public function __construct(public readonly string $userId)
    {
    }
}
