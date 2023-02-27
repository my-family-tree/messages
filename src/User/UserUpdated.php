<?php

namespace MyFamilyTree\Messages\User;

class UserUpdated
{
    public function __construct(public readonly string $userId)
    {
    }
}
