<?php

class HelloTest extends TestCase
{

    public function testSayHello()
    {
        echo "\nHelloTest::testSayHello()";
        $this->assertEquals(Application::sayHello(), "hello");
    }
}
