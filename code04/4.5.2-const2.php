<?php

class  MyClass
{
    const NAME = "阿凡达";

    function showResult()
    {
        echo self::NAME;
    }
}

$object = new MyClass();
$object->showResult();
//运行结果：阿凡达