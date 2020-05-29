<?php
/**
 * 静态变量的加深理解
 */

//静态变量不一定依赖于对象
class test
{
    public static $p = 90;
}

echo test::$p; //输出90