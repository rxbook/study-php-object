<?php

class People
{
    function __construct($name, $age)
    {        //定义构造方法
        $this->name = $name;
        $this->age = $age;
    }

    function say()
    {
        echo "姓名：" . $this->name . " ";
        echo "年龄：" . $this->age;
        echo "<br>";
    }

    function __destruct()
    {
    }
}

class Student extends People
{
    //覆盖父类的成员方法say()
    function say($language)
    {
        echo $this->name . " 正在学习" . $language;
    }
}

$student = new Student("张三", 5);
$student->say("PHP");
