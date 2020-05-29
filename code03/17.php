<?php

/**
 * 当创建子类对象的时候，默认情况下，不会自动调用父类的构造方法.
 */
class D
{
    public $n1 = 25;

    //D类的构造方法
    public function __construct()
    {
        echo "这是D的构造方法！";
    }
}

class D1 extends D
{
    //D1类的构造方法
    function __construct()
    {
        echo "这是D1子类的构造方法";
    }
}

//实例化D1对象
$d1 = new D1(); //输出 这是D1子类的构造方法