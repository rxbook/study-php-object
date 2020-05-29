<?php

/**
 * 静态变量（方法）
 */
class BookShu
{
    static $num = 0; //声明一个静态变量$num， 初始值为0

    public function showMe() //声明方法
    {
        echo '您是第' . self::$num . '位访客'; //输出静态变量
        self::$num++; //将静态变量加1
    }
}

$bk1 = new BookShu();  //实例化对象$bk1
$bk1->showMe(); //调用对象$bk1的showMe方法
echo "<br>";
$bk2 = new BookShu();
$bk2->showMe();
echo "<br>";

$bk3 = new BookShu();
$bk3->showMe();
echo "<br>";

echo '您是第' . BookShu::$num . '个访客.....';