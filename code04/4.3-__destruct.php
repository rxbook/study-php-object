<?php

/**
 * 面向对象基础
 */
class People
{                                        //创建People类
    function __construct($name, $sex, $age)
    {                //定义构造方法
        $this->name = $name;
        $this->sex = $sex;
        $this->age = $age;
    }

    function say()
    {                                //定义成员方法say()
        echo "姓名：" . $this->name . " ";
        echo "性别：" . $this->sex . " ";
        echo "年龄：" . $this->age;
        echo "<br>";
    }

    function __destruct()
    {                            //定义析构方法
        echo "销毁对象 " . $this->name;
        echo "<br>";
    }
}

$p1 = new People("张三", "男", 20);                        //创建对象p1
$p1->say();
$p2 = new People("李四", "女", 30);                        //创建对象p2
$p2->say();
$p3 = new People("王五", "男", 40);                        //创建对象p3
$p3->say();
