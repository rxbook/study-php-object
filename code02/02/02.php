<?php

/**
 * 抽象类
 */
abstract class GoodsObject   //定义抽象类
{
    abstract function service($name, $price, $num); //定义抽象方法
}

class MyBook extends GoodsObject  //定义子类，继承抽象类
{
    function service($name, $price, $num) //定义方法
    {
        echo "您购买的商品为：" . $name;
        echo "<br>该商品的单价为：" . $price . "元";
        echo "<br>您购买的数量为：" . $num;
        echo "<br>应付金额为：" . $price * $num . "元";
    }
}

class MyComputer extends GoodsObject
{
    function service($name, $price, $num)
    {
        echo "您购买的商品为：" . $name;
        echo "<br>该商品的单价为：" . $price . "元";
        echo "<br>您购买的数量为：" . $num;
        echo "<br>应付金额为：" . $price * $num . "元";
    }
}

$book = new MyBook();
$book->service('《大话西游》', '85', '3');
echo '<p>';
$computer = new MyComputer();
$computer->service('华硕笔记本', '6500', '2');
