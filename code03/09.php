<?php
/**
 * 题目需求：有一群小孩在玩堆雪人,不时有新的小孩加入,请问如何知道现在共有多少人在玩?
 * 请使用面向对象的思想，编写程序解决。
 */

/*使用静态变量完成（面向对象）*/

class Children
{
    public $name;
    //这里定义并初始化一个静态变量 $nums
    public static $nums = 0;

    function __construct($name)
    {
        $this->name = $name;
    }

    public function game()
    {
        self::$nums += 1; //使用静态变量
        echo $this->name . "加入游戏<br>";
    }
}

//创建三个小孩
$child1 = new Children("李一");
$child1->game();
$child2 = new Children("李二");
$child2->game();
$child3 = new Children("李三");
$child3->game();
//看看有多少人玩游戏
echo "<br/> 有" . Children::$nums . "人";
