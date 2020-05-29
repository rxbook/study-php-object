<?php

/**
 * 继承
 */

//定义一个父类People
class People
{
    function __construct($name, $age)
    {    //定义构造方法
        $this->name = $name;
        $this->age = $age;
    }

    //定义成员方法say()
    function say()
    {
        echo "姓名:" . $this->name . " ";
        echo "年龄：" . $this->age;
        echo "<br>";
    }

    //定义析构方法
    function __destruct()
    {
    }
}

//定义一个子类Student
class Student extends People
{
    //定义成员方法study()
    function study($language)
    {
        echo "我正在学习 " . $language . " ……";
    }
}

$student = new Student("张三", 5); //创建子类对象student
$student->say(); //调用父类方法
$student->study("PHP"); //调用子类方法
