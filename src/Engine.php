<?php

namespace App;

use App\Adapter\Cache;

class Engine
{
    protected $cacheAdapter;

    public function __construct($cacheAdapter = null)
    {
        $this->cacheAdapter = $cacheAdapter ?? new Cache();
    }

    public function getCacheAdapter()
    {
        return $this->cacheAdapter;
    }
}