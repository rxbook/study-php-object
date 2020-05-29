<?php

/**
 * private 私有成员
 */
class shu
{
    private $name = '电脑类书籍'; //声明私有变量

    public function setName($name) //设置私有变量方法
    {
        $this->name = $name;
    }

    public function getName()  //读取私有变量方法
    {
        return $this->name;
    }
}

//shu的子类
class Lshu extends shu
{

}

$bk = new Lshu(); //实例化对象
echo "正确操作私有变量的方法：";
$bk->setName("从百草园到三味书屋");
echo $bk->getName();
echo "<br>直接操作私有变量的错误结果：";
//echo shu::$name;