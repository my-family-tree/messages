<?php

namespace MyFamilyTree\Messages\Message;

class MarriageDeleted
{
    public function __construct(public readonly string $marriageId)
    {
    }
}
