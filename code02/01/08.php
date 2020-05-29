<?php

/**
 * 作用域操作符::
 */
class Book
{
    const NAME = '《海的儿子》'; //常量NAME

    function __construct() //构造方法
    {
        echo '本月图书类冠军为：' . Book::NAME . '<br>'; //输出默认值
    }
}

class bok extends Book //Book的子类
{
    const NAME = '《鲁迅文集》'; //声明常量

    function __construct() //子类的构造方法
    {
        parent::__construct(); //调用父类的构造函数
        echo '本月图书类冠军为：' . self::NAME;
    }
}

$obj = new bok();  //实例化对象