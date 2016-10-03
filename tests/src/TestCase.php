<?php

require_once __DIR__ . '/../vendor/autoload.php';

class TestCase extends \PHPUnit_Framework_TestCase
{
    public function __construct() {
        echo "\nTestCase::__construct()";
        $result = require_once __DIR__ . '/../../boot.php';
        $this->assertEquals($result, true);
    }

    public function testMyObject() {
        echo "\nTestCase::testMyObject()";
        $myobject = new TestCase();
    }
}
