<?php

/**
 * 类常量――关键字const
 */
class Sport3
{
    const BOOKTYPE = "计算机图书"; //声明常量BOOKTYPE
    public $name; //声明变量，用来存放商品名称

    function setName($name) //声明方法 setName()
    {
        $this->name = $name; //设置成员变量值
    }

    function getName() //声明方法getName()
    {
        return $this->name;
    }
}

echo "常量输出结果为：" . Sport3::BOOKTYPE . "<br>"; //输出常量BOOKTYPE

$book = new Sport3(); //实例化对象
$book->setName("我在北京...."); //调用方法setName()
echo "变量输出结果一：" . $book->getName();
echo "<br>";
$book->setName("她却在上海...."); //调用方法setName()
echo "变量输出结果二：" . $book->getName();
