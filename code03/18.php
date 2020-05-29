<?php

/**
 * 如果要调用父类的 构造方法或者其它方法(public/protected),
 * 可以使用类名::方法名() 或 parent::方法名()
 */
class E
{
    public $n1 = 25;

    //E类的构造方法
    public function __construct()
    {
        echo "这是E的构造方法！";
    }
}

class E1 extends E
{
    //E1类的构造方法
    function __construct()
    {
        echo "这是E1子类的构造方法！";
        //调用父类的 构造方法
        E::__construct();
        //或者下面的这样
        parent::__construct();
    }
}

//实例化D1对象
$e1 = new E1();