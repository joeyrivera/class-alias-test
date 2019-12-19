<?php

namespace Test;

class EngineTest extends AbstractWithAlias
{
    protected $engine;

    public function setUp(): void
    {
        parent::setUp();

        $this->engine = new \App\Engine();
    }

    public function testRightAdapter()
    {
        $adapter = $this->engine->getCacheAdapter();
        $this->assertEquals('Fake Cache', $adapter->getName());
        $this->assertInstanceOf('App\Adapter\Cache', $adapter);
        $this->assertInstanceOf('App\Util\CacheMock', $adapter);
    }

    public function testAgainRightAdapter()
    {
        $adapter = $this->engine->getCacheAdapter();
        $this->assertEquals('Fake Cache', $adapter->getName());
        $this->assertInstanceOf('App\Adapter\Cache', $adapter);
        $this->assertInstanceOf('App\Util\CacheMock', $adapter);
    }
}