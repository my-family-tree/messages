<?php

namespace MyFamilyTree\Messages\Family;

class LeavedFamily
{
    public function __construct(public readonly string $userId, public readonly string $familyId)
    {
    }
}
