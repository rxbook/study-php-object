<?php

/**
 * 案例分析一个类可以继承父类并且实现多个接口
 */
class Monkey
{ //老猴子
    public function climb()
    {
        echo "猴子会爬树...";
    }
}

interface iBird
{ //定义一个iBird接口
    public function fly();
}

interface iFish
{ //定义一个iFish接口
    public function swim();
}

//定义一个小猴子类，继承Monkey类，并且实现上面两个接口
class Wukong extends Monkey implements iBird, iFish
{
    public function fly()
    {
        echo "猴子会飞了...";
    }

    public function swim()
    {
        echo "猴子会游泳了.....";
    }
}

//实例化小猴子类
$wk = new Wukong();
$wk->climb(); //输出 猴子会爬树...
$wk->fly(); //输出 猴子会飞了...
$wk->swim(); //输出 猴子会游泳了...