<?php

namespace yourvendorname\Hello;

/**
 * Tests
 *
 */
class UriTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Basic test to create class.
     */
    public function testCreateHello()
    {
        $hello = new Hello();
        $this->assertInstanceOf(Hello::class, $hello);
    }



    /**
     * Test hello
     */
    public function testUri()
    {
        $hello = new Hello();
        $this->assertEquals("Hello World!", $hello->hello(), "Hello method did not say hello world");
    }
}
