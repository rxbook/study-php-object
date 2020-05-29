<?php

/**
 * 析构方法
 */
class Sport5
{
    public $name; //定义成员变量：姓名
    public $height; //定义成员变量：身高
    public $age; //定义成员变量：年龄
    public $sex; //定义成员变量：性别

    public function __construct($name, $height, $age, $sex) //定义构造方法
    {
        $this->name = $name; //为成员变量赋值
        $this->height = $height;
        $this->age = $age;
        $this->sex = $sex;
    }

    public function Foot() //声名成员方法
    {
        if ($this->height > 180 && $this->age > 15) {
            return $this->name . "符合踢足球的要求！"; //方法实现的功能
        } else {
            return $this->name . "不符合要求！！！";
        }
    }

    function __destruct()  //析构函数
    {
        echo "<p><b>对象被销毁，调用析构函数！</b></p>";
    }
}

$s = new Sport5('成龙', '195', '50', '男'); //实例化类，并传递参数
unset($s);