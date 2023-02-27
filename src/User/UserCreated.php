<?php

namespace MyFamilyTree\Messages\User;

class UserCreated
{
    public function __construct(public readonly string $userId)
    {
    }
}
