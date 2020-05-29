<?php

/**
 * 析构方法（析构函数）
 */
class Baby
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __destruct()
    {
        echo $this->name . "销毁资源<br>";
    }
}

//销毁顺序：先入后出
$b1 = new Baby('唐三藏', 22);
$b2 = new Baby('孙悟空', 22);
//$b5=$b2; //如果执行下面=null之前赋值给$b5，则不会成为垃圾
$b2 = null;//$b2成为垃圾，最先被销毁（垃圾对象：没有任何变量再使用它）
$b3 = new Baby('猪八戒', 22);
$b4 = new Baby('沙和尚', 22);