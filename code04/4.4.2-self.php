<?php

class Myclass
{
    static $staticvariable = 0;

    function addOne()
    {
        self::$staticvariable++;
        echo self::$staticvariable++;
    }
}

$object = new Myclass();
$object->addOne(); //输出：1