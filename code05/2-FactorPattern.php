<?php
/**
 * 简单工厂模式
 */

//定义抽象类
abstract class Product
{
    abstract function getName();
}

//具体产品A
class ProductA extends Product
{
    public function getName()
    {
        echo "I am ProductA";
    }
}

//具体产品B
class ProductB extends Product
{
    public function getName()
    {
        echo " I am ProductB ";
    }
}

//工厂类
class ProductFactory
{
    static function Create($name)
    {
        switch ($name) {
            case "A":
                return new ProductA();
            case "B":
                return new ProductB();
        }
    }
}

$product = ProductFactory::Create("A");
$product->getName();

$product = ProductFactory::Create("B");
$product->getName();