<?php
/**
 * 题目需求：有一群小孩在玩堆雪人,不时有新的小孩加入,请问如何知道现在共有多少人在玩?
 * 请使用面向对象的思想，编写程序解决。
 */
/*使用全局变量完成（非面向对象）*/
//定义玩游戏的全局变量
global $nums;
//赋值
$nums = 0;

class Child
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    public function game()
    {
        //声明一下使用全局变量
        global $nums;
        $nums += 1;
        echo $this->name . "加入游戏<br>";
    }
}

//创建三个小孩
$child1 = new Child("李逵");
$child1->game();
$child2 = new Child("张飞");
$child2->game();
$child3 = new Child("唐僧");
$child3->game();
//看看有多少人玩游戏
echo "<br/> 有" . $nums . "人在玩游戏！";