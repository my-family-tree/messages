<?php

namespace MyFamilyTree\Messages\Message;

class MarriageCreated
{
    public function __construct(public readonly string $marriageId)
    {
    }
}
