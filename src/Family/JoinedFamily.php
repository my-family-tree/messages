<?php

namespace MyFamilyTree\Messages\Family;

class JoinedFamily
{
    public function __construct(public readonly string $userId, public readonly string $familyId)
    {
    }
}
