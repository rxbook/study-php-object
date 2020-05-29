<?php

/**
 * __clone()方法
 */
class Book2
{
    private $name = '我最喜欢的书'; //声明私有变量$name，并赋初值

    public function setName($nm) //声名成员方法setName，为变量$name赋值
    {
        $this->name = $nm;
    }

    public function getName() //声名成员方法，返回变量$name的值
    {
        return $this->name;
    }

    public function __clone() //声明__clone方法
    {
        $this->name = '我最喜欢的电脑'; //将变量$name的值修改为“我最喜欢的电脑”
    }

}

$bok1 = new Book2();  //实例化对象$book1
$bok2 = clone $bok1; //克隆对象
echo '对象$bok1的值为：' . $bok1->getName();
echo '<br>';
echo '对象$bok2的值为：' . $bok2->getName();
