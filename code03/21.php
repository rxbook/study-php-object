<?php

/**
 * 方法覆盖
 */
class Animal
{
    public $name;
    public $price;

    //动物叫的方法
    function cry()
    {
        echo "不知道动物怎么叫!";
    }
}

class Dog extends Animal
{
    //覆盖父类的cry()方法
    function cry()
    {
        echo "小狗汪汪叫...";
    }
}

class Pig extends Animal
{
    //覆盖父类的方法
    function cry()
    {
        echo "小猪哼哼叫...";
    }
}

$dog1 = new Dog();
$dog1->cry(); //输出 小狗汪汪叫...
$pig1 = new Pig();
$pig1->cry(); // 输出 小猪哼哼叫...