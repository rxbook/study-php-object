<?php

/**
 * $this
 */
class myExample //创建example类
{
    function exam() //创建成员方法
    {
        if (isset($this)) //判断变量$this是否存在
        {
            echo '$this 的值为：' . get_class($this); //如果存在，输出$this所属类的名字
        } else {
            echo '$this 并未定义';
        }
    }
}

$name = new myExample(); //实例化对象$name
$name->exam(); //调用方法exam()