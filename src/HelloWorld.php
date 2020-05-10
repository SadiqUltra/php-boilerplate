<?php


namespace Sadiq;

class HelloWorld
{
    public function say()
    {
        return 'hello world';
    }
}

$hello = new HelloWorld();
$hello->say();
