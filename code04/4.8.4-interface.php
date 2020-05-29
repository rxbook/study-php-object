<?php

/**
 * 抽象类和接口
 */

//定义第一个接口
interface IName
{
    function setName($name);

    function getName();
}

//定义第二个接口
interface IAge
{
    function setAge($age);

    function getAge();
}

//定义一个用于实现上面接口的类
class Stu implements IName, IAge
{
    private $name;
    private $age;

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        echo "姓名:" . $this->name . " ";
    }

    function setAge($age)
    {
        $this->age = $age;
    }

    function getAge()
    {
        echo "年龄:" . $this->age;
    }
}

$object = new Stu();
$object->setName("张三");
$object->getName();
$object->setAge(5);
$object->getAge();