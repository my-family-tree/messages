<?php

namespace MyFamilyTree\Messages\Marriage;

class MarriageDeleted
{
    public function __construct(public readonly string $marriageId)
    {
    }
}
