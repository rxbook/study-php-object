<?php

/**
 * 抽象类
 */
abstract class Animal
{
    public $name;
    protected $age;

    //这个方法没有方法体,这个方法主要是为了让子类去实现.
    abstract public function cry(); //这个方法可以没有
    //也可以是实现了的方法
    /*public function cry(){
        echo "crying...";
    }*/
}

class Cat extends Animal
{
    public function cry()
    {
        echo "猫猫叫唤..";
    }
}

//创建一个子类实例
$cat1 = new Cat();
$cat1->cry(); //输出 猫猫叫唤..