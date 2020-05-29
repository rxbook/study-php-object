<?php

/**
 * 抽象类和接口
 */
abstract class Study
{
    //定义一个抽象方法
    abstract function printStudy($name, $language);
}

//定义OneStudy类继承于Study类
class OneStudy extends Study
{
    //抽象方法的具体实现
    function printStudy($name, $language)
    {
        echo $name . " 正在学习" . $language . " ";
    }
}

//定义TwoStudy类继承于Study类
class TwoStudy extends Study
{
    function printStudy($name, $language)
    {
        //抽象方法的具体实现
        echo $name . " 正在学习" . $language . " ";
    }
}

//创建对象first
$first = new OneStudy();
$first->printStudy("Paul", "PHP");

//创建对象second
$second = new TwoStudy();
$second->printStudy("Bob", "Java");
