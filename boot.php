<?php
    // This is an example bootstrap for phpunit
    // You can safely ignore this file if you will use another bootstrap file

    if (is_readable(__DIR__ . '/vendor/autoload.php')) require_once __DIR__ . '/vendor/autoload.php';
    if (class_exists('PHPUnit_Framework_TestSuite')) require_once __DIR__.'/tests/src/TestCase.php';

    // your application here ...
    if (is_readable(__DIR__ . '/index.php')) require_once __DIR__ . '/index.php';

    return true;
