<?php

namespace MyFamilyTree\Messages\Marriage;

class MarriageCreated
{
    public function __construct(public readonly string $marriageId)
    {
    }
}
