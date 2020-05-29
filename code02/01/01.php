<?php

/**
 * 类的实例化
 */
class Sport
{
    function BasketBall($name, $height, $age, $sex) //声明成员方法
    {
        if ($height > 180 && $age > 12) {
            return $name . "符合打篮球的要求！"; //方法实现的功能
        } else {
            return $name . "不符合要求！！！"; //方法实现的功能
        }
    }
}

$spt = new Sport();
echo $spt->BasketBall('孙悟空', '183', '21', '男');
echo "<br>";
echo $spt->BasketBall('猪八戒', '179', '21', '男');
echo "<br>";
echo $spt->BasketBall('沙和尚', '185', '17', '女');
echo "<br>";
echo $spt->BasketBall('白骨精', '160', '13', '女');
