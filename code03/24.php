<?php

/**
 * 如果A1类继承了一个抽象类 A，则要求A1类实现从A类继承的所有抽象方法
 */
abstract class A
{
    abstract function test();
}

//A1类要么自己抽象，或者实现从A类继承的抽象方法.
class A1 extends A
{
    function test()
    {
        echo "我实现A:test()";
    }
}