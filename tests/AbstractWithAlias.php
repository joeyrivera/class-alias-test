<?php

namespace Test;

abstract class AbstractWithAlias extends \PHPUnit\Framework\TestCase
{
    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();

        class_alias('\App\Util\CacheMock', '\App\Adapter\Cache');
    }
}