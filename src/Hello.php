<?php

namespace App;

class Hello
{
    private string $hello = 'Hello World';

    // public function __construct()
    // {
    // }


    // public function __construct(
    //     string $hello = "Hello world",
    // )

    // public function talk(): string
    // {
    //     return $hello;
    // }

    /**
     * Get the value of hello
     */
    public function getHello(): string
    {
        return $this->hello;
    }
}
