<?php
/**
 * 分析对象在内存中存在的形式
 */

//定义一个人类
class Person
{
    public $name;
    public $age;
}

$a = new Person();
$a->name = "小明";
$a->age = 20;
//把a变量(对象),赋给$b
$b = $a;
echo $a->name . "<br/>";
echo $b->name . "<br/>";
echo $b->age . "<br/>"; //输出为20
$b->age = 500;
echo $a->age . "<br/>"; //输出为500
echo $b->age . "<br>"; //输出为500
