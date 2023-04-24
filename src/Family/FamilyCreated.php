<?php

namespace MyFamilyTree\Messages\Family;

class FamilyCreated
{
    public function __construct(public readonly string $familyId)
    {
    }
}
