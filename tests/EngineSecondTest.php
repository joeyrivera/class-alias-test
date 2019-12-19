<?php

namespace Test;

/**
 * @runTestsInSeparateProcesses
 */
class EngineSecondTest extends AbstractWithoutAlias
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
        $this->assertEquals('Real Cache', $adapter->getName());
        $this->assertInstanceOf('App\Adapter\Cache', $adapter);
        $this->assertNotInstanceOf('App\Util\CacheMock', $adapter);
    }

    public function testAgainRightAdapter()
    {
        $adapter = $this->engine->getCacheAdapter();
        $this->assertEquals('Real Cache', $adapter->getName());
        $this->assertInstanceOf('App\Adapter\Cache', $adapter);
        $this->assertNotInstanceOf('App\Util\CacheMock', $adapter);
    }
}