<?php

require_once 'vendor/autoload.php';

$engine = new \App\Engine();
echo $engine->getCacheAdapter()->getName(), PHP_EOL;