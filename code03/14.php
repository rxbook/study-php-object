<?php
/**
 * 继】
 */

//应用场景 开发一套学生管理系统(Pupil, Graduate , ...)
//父类
class Stu
{
    public $name;
    protected $age;
    protected $grade;

    public function showInfo()
    {
        echo $this->name . '<br>';
    }
}

//子类：小学生
class Pupil extends Stu
{
    public function testing()
    {
        echo "小学生考试..";
    }
}

//子类：研究生
class Graduate extends Stu
{
    public function testing()
    {
        echo "研究生考试..";
    }
}

//创建一个小学生
$stu1 = new Pupil();
$stu1->name = "小明";
$stu1->testing();
$stu1->showInfo();
//创建一个研究生
$stu2 = new Graduate();
$stu2->name = "老明";
$stu2->testing();
$stu2->showInfo();