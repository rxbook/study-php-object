<?php

/**
 * 静态方法：
 * 统计所有学生交的学费
 */
class Student
{
    public static $fee = 0; //静态变量，学费
    public $names; //非静态变量，学生姓名

    function __construct($names)
    {
        $this->names = $names;
    }

    //学生入学的方法
    public static function gotoSchool($money)
    {
        self::$fee += $money;
    }

    //获取总学费
    public static function getFee()
    {
        return self::$fee;
    }
}

//创建学生对象
$stu1 = new Student("小倩");
$stu1->gotoSchool(340);//可以使用 对象名->类方法名
Student::gotoSchool(200); //可以直接使用 类名::类方法名
echo "总学费是：" . Student::getFee();