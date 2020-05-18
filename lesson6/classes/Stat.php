<?php


class Person
{
    static $count = 0;
    public function __construct()
    {
        self::$count++;
    }
}
