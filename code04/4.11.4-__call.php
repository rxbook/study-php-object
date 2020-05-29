<?php

class Example2
{
    public function __call($method, $args)
    {
        echo $method . "()方法被调用,具体内容如下：";
        echo "<br>";
        print_r($args);
    }
}

$object = new Example2();
$object->myMethod(1, 2);