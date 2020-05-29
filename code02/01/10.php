<?php

/**
 * protected 保护成员
 */
class Bookk
{
    protected $name = '电脑类书籍'; //声明保护变量$name
}

class LBookk extends Bookk //Bookk类的子类
{
    public function showMe()
    {
        echo '对于protected修饰的变量，在子类中是可以直接调用的！<br>';
        echo '$name=' . $this->name;
    }
}

$k = new LBookk(); //实例化对象
$k->showMe();

echo '<p>但在其他地方是不可以调用的，否则会出错：';
//$k->name='history';
