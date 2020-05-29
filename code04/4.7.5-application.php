<?php

class People
{
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
        echo "调用父类的构造方法";
        echo "<br>";
    }

    function say()
    {
        echo "姓名：" . $this->name . " ";
        echo "年龄：" . $this->age;
        echo "<br>";
    }

    //定义析构方法
    function __destruct()
    {
    }
}

class Student extends People
{
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
        echo "调用子类的构造方法";
        echo "<br>";
    }

    function study($language)
    {
        echo "我在在学习 " . $language . " ";
    }

    //定义析构方法
    function __destruct()
    {
    }
}

//创建子类对象student
$student = new Student("张三", 5);
$student->say();
$student->study("PHP");
