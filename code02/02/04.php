<?php

/**
 * 克隆对象
 */
class Book
{
    private $name = '我的书籍'; //声明私有变量$name，并赋初值

    public function setName($nm) //声名成员方法setName，为变量$name赋值
    {
        $this->name = $nm;
    }

    public function getName() //声名成员方法，返回变量$name的值
    {
        return $this->name;
    }
}

$book1 = new Book();  //实例化对象$book1
$book2 = clone $book1; //克隆对象
$book2->setName('我的电脑');
echo '对象$book1的值为：' . $book1->getName();