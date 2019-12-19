<?php

namespace App\Util;

class CacheMock
{
    protected $name = 'Fake Cache';

    public function getName(): string
    {
        return $this->name;
    }
}