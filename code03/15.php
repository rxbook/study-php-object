<?php

/**
 * 父类的 public  、protected 的属性和方法被继承，private 的属性和方法没有被继承
 */
class B
{
    public $n1 = 1;
    protected $n2 = "hello";
    private $n3 = 12.3;

    public function test1()
    {
        return "test1...";
    }

    protected function test2()
    {
        return "test2...";
    }

    private function test3()
    {
        return "test3...";
    }
}

class B1 extends B
{
    function show()
    {
        echo $this->n2;
        //echo $this->n3;//private $n3，会报错
    }

    function show2()
    {
        echo $this->test2();
        //echo $this->test3();//private function test3()会报错
    }
}

//创建B1类
$b1 = new B1();
echo $b1->n1;//输出 1
echo $b1->test1();//输出 test1...
echo $b1->show();//输出 hello
echo $b1->show2();//输出 test2...