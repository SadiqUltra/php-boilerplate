<?php


use Sadiq\HelloWorld;
use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function testSay()
    {
        $helloWorld = new HelloWorld();
        $this->assertTrue($helloWorld->say() === 'hello world', 'hello world');
    }
}
