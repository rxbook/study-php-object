<?php

/**
 * 如果给一个函数传递一个对象，实际上是传递的一个地址
 */
class PS
{
    public $name;
    public $age;
}

$p1 = new PS();
$p1->name = "任兴";
$p1->age = 33;
//函数接收对象时候，究竟是传入值，还是地址(!!!!)
function test1($p)
{
    $p->name = "小明";
}

test1($p1);
echo $p1->name;