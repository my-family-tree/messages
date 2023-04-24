<?php

namespace MyFamilyTree\Messages\Family;

class FamilyDeleted
{
    public function __construct(public readonly string $familyId)
    {
    }
}
