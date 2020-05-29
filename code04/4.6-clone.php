<?php

/**
 * 克隆
 */
class MyClone
{
    public function __clone()
    {
        echo "对象已经被克隆";
    }
}

$objectA = new MyClone();
$objectB = $objectA;            //不调用__clone()，没任何输出
$objectC = clone $objectA;    //调用__clone()，输出：“对象已经被克隆”
