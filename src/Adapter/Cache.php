<?php

namespace App\Adapter;

class Cache
{
    protected $name = 'Real Cache';

    public function getName(): string
    {
        return $this->name;
    }
}